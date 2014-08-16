<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {


	public function before(){
		parent::before();
		
	}
	
	public function action_index()
	{	

		$posts = ORM::factory('post')->order_by('id','DESC');
		$count = ORM::factory('post')->count_all();
		$page  = $this->request->param('page');
		if($page == 0){
			$page = 1;
		}
		$id    = $this->request->param('id');
		if(isset($id)){
			// выводим полный пост со ссылкой на индекс
			$postsAll = View::factory('v_post_one', array(
						'posts' => $posts,
						'page'  => $page,
						'id'    => $id
						));
			$this->template->block_center = $postsAll;
		} else {
		$pagination = Pagination::factory(array(
					'total_items' => $count,
					))->route_params(array(
					'controller' => Request::current()->controller(),
					'id' => $this->request->param('id') 
					));

		$postsAll = View::factory('v_post', array(
					'posts'      => $posts,
					'pagination' => $pagination,
					'page'       => $page,
					'id'		 => $id
					));
		$this->template->block_center = $postsAll;
		}
	}

	public function action_search(){

		$id = $this->request->param('id');
		if(isset($_GET['search'])){
			$dataSearch = Arr::get($_GET,'search');
			$clean_search = str_replace(',',' ',$dataSearch);
			$search_words = explode(' ',$clean_search);
			$final_search_words = array();
			if(count($search_words) > 0){
				foreach($search_words as $word){
					if(!empty($word)){
						$final_search_words[] = $word;
					}
				}
			}

			$posts = ORM::factory('post');
			if(!empty($final_search_words)){
				$posts->or_where_open();
				if(count($final_search_words) > 0){
					foreach($final_search_words as $word){
						$posts->or_where('post_title','LIKE','%'.$word.'%');
						$posts->or_where('post','LIKE','%'.$word.'%');
					}
				}
				$posts->or_where_close(); 
			}
			$posts->order_by('date','DESC');
			$postSearched = $posts->find_all();
			$page = 1;

		if(Auth::instance()->logged_in()){
		$postsAll = View::factory('v_search_logged', array(
					'postSearched'      => $postSearched,
					'page' =>$page
					));
		$this->template->block_center = $postsAll;
		} else {
		$postsAll = View::factory('v_search', array(
					'postSearched'      => $postSearched,
					'page' =>$page
					));
		$this->template->block_center = $postsAll;			
		}
		}
	}

	public function action_sort(){	
		$arrKey = array_keys($_GET);
		foreach(Model::factory('menu')->navi_cat() as $index_menu=>$menu){
			if($index_menu == $arrKey[0]){
				$arrKeyTrue = $menu;
			}
		}

		$categories = ORM::factory('categorie')->find_all(); //решил запилить сравнение в контроллере для того чтобы вл вьюхе было проще
		foreach($categories as $categorie){
			if($categorie->categorie == $arrKeyTrue){
				$catTrue = $categorie->id;
			}
		}
		$posts = ORM::factory('post');
		$count = ORM::factory('post')
			->join('posts_categories')
			->on('post.id','=','posts_categories.post_id')
			->where('posts_categories.cat_id', '=', $catTrue)
			->count_all();
		$page  = $this->request->param('page');
		$id    = $posts->id;

		$pagination = Pagination::factory(array(
					'total_items' => $count,
					))->route_params(array(
					'controller' => Request::current()->controller(),
					'id' => $this->request->param('id') 
					));

		if(Auth::instance()->logged_in()){
		$postsAll = View::factory('v_sort_logged', array(
					'posts'      => $posts,
					'pagination' => $pagination,
					'page'       => $page,
					'id'		 => $id,
					'arrKeyTrue' => $arrKeyTrue,
					'catTrue'	 => $catTrue
					));
		$this->template->block_center = $postsAll;
		} else {
		$postsAll = View::factory('v_sort', array(
					'posts'      => $posts,
					'pagination' => $pagination,
					'page'       => $page,
					'id'		 => $id,
					'arrKeyTrue' => $arrKeyTrue,
					'catTrue'	 => $catTrue
					));
		$this->template->block_center = $postsAll;			
		}
	}
}

 