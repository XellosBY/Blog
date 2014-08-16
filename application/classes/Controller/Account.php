<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Controller_Index{


	public function before(){
		parent::before();
		$this->template->scripts   = array('media/js/jquery.js',
											'media/js/jquery.multipack.js',
											'media/js/upload.js');
		
	}
	
	public function action_index()
	{	
		$posts = ORM::factory('post')->order_by('id','DESC');
		$count = ORM::factory('post')->count_all();
		$page  = $this->request->param('page');
		if($page == 0){
			$page = 1;
		}
		$id    = $posts->id;
		$pagination = Pagination::factory(array(
					'total_items' => $count,
					))->route_params(array(
					'id'=> $this->request->param('id'),
					));

		$postsAll = View::factory('v_post_logged', array(
					'posts'      => $posts,
					'pagination' => $pagination,
					'page'       => $page,
					'id'		 => $id
					));
		$this->template->block_center = $postsAll;
		$block_admin = View::factory('v_account');
		$this->template->block_admin = $block_admin;
	}

	public function action_plus(){

		$captcha = Captcha::instance();
		$message = '';
		if(isset($_POST['submit'])){
			$data = Arr::extract($_POST, 
				array('post_title','categorie','post','captcha'));
			$posts = ORM::factory('post');
			$categories = ORM::factory('categorie');
			try{
				if(!empty($_FILES['images']['name'][0])){
					$filename = $this->_upload_img($img);	
					$posts->photo      			  = $filename;
				}
					$posts->post_title            = trim(strip_tags($data['post_title']));
					$categories->categorie        = trim(strip_tags($data['categorie']));
					$posts->post                  = trim(strip_tags($data['post']));
					$posts->user_id				  = $this->user->id;
					if(Captcha::valid($data['captcha'])){
						$posts->save();
						$posts->add('categorie',(int)$data['categorie']);
						$this->redirect('index');
					} else {
						$message = Kohana::message('genresAdd','fail');
					}	
			} catch(ORM_Validation_Exception $e){
				$errors = $e->errors('exception');
			}
		}
		$content = View::factory('account/v_plus')->bind('errors',$errors)->bind('data',$data)
												->bind('captcha',$captcha)->bind('message',$message);
		$this->template->block_center = $content;
	}

	public function _upload_img($file, $ext = null, $directory = null){
		if($directory == null){
			$directory = 'media/uploads';
		}
		if($ext == null){
			$ext = 'jpg';
		}
		
		$im = Image::factory($file);
		if($im->width>150){
			$im->resize(150);
		}
			$symbols='1234567890';
			$filename='';
			for($i = 0;$i < 10;$i++){
				$filename .= rand(1, $symbols);
			}

		$im->save("$directory/s_$filename.$ext");

		return "$filename.$ext";
	}

	public function action_delete(){
		$id = $this->request->param('id');
		$posts = ORM::factory('post')->where('id','=', $id)->find();
		if($posts->photo){
			$dir = $_SERVER['DOCUMENT_ROOT'].Kohana::$base_url.'media/uploads/';
			$photo = $dir.'s_'.$posts->photo;
			@unlink($photo);
		}
		$posts->delete();
		$this->redirect('account');
	}

	public function action_edit(){
		$id = $this->request->param('id');
		$data = ORM::factory('post')->where('post.id','=',$id)
									->find();
		$data1 = '';							
			foreach($data->categorie->find_all() as $cat){
				$data1 .= $cat->categorie.' ';
				$data->remove('categorie', $cat);
			}

		$data = ORM::factory('post')->where('post.id','=',$id)
									->find()
									->as_array();
		//выбрали записи и положили в форму

		
		
		if(isset($_POST['submit'])){
			$posts = ORM::factory('post', $id); //находим таблицу по ид
			
			$newData = Arr::extract($_POST, array(
					'post_title','categorie', 'post')); //извлекаем новые данные из поста

				$posts->post_title            = trim(strip_tags($newData['post_title']));

				$categories = explode(' ',trim(strip_tags($newData['categorie'])));
				$c = array();
				print_r($categories);
				foreach($categories as $categorie){
					if($categorie != null){
					$c = array_keys(Model::factory('categorie')->cat(), $categorie);
					$posts->add('categorie',$c);
					}
				}
				$posts->post                  = trim(strip_tags($newData['post']));
				$posts->user_id				  = $this->user->id;
				//с данными готово, теперь фото

				if($posts->photo){
					$dir = $_SERVER['DOCUMENT_ROOT'].Kohana::$base_url.'media/uploads/';
					$photo = $dir.'s_'.$posts->photo;
				@unlink($photo);
				}
				if(!empty($_FILES['images']['name'][0])){
					$filename = $this->_upload_img($_FILES['images']['tmp_name'][0]);	
					$posts->photo = $filename;
				}

				try{
				$posts->save();
				$this->redirect("account");
				} catch (ORM_Validation_Exception $e) {
					$errors = $e->errors('validation');
				}
		}

		$content = View::factory('account/v_plus_edit')
					->bind('errors',$errors)
					->bind('data',$data)
					->bind('data1', $data1)
					->bind('id',$id)
					->bind('newData', $newData);
		$this->template->block_center = $content;
	}
}	