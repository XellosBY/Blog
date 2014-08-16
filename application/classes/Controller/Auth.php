<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Auth extends Controller_Base{
	public function before(){
		parent::before();
		$users = ORM::factory('user');
		$role = ORM::factory('role')->where('name','=','login')->find();
	}
	public function action_index(){
		if(isset($_POST['submit'])){
			$data = Arr::extract($_POST, 
				array('username','password','firstname','password_confirm','email'));
			$users = ORM::factory('user');
				try{
					$users->create_user($data, array('username','password','email')); //1
					$role = ORM::factory('role')->where('name','=','login')->find();
					$users->add('roles',$role);
					$this->action_login();
					$this->redirect('index');
				} catch(ORM_Validation_Exception $e){
					$errors = $e->errors('auth');
				}
		}
			$content = View::factory('auth/v_reg')->bind('errors',$errors)->bind('data',$data);	
			$this->template->block_center = $content;

	}
	public function action_login(){
		if(Auth::instance()->logged_in()){
			$this->redirect('index');
		}

		if(isset($_POST['submit'])){

			$data = Arr::extract($_POST,
				array('username','password','remember'));
			$status = $this->auth->login($data['username'],$data['password'], true);

			if($status){
				$this->redirect('index');
			} else{
				$this->redirect('index');
				$errors = array(Kohana::message('auth/user','no_user'));
			}
		}

			$content = View::factory('auth/v_auth_login')->bind('errors',$errors)->bind('data',$data);
			$this->template->block_auth = $content;

	}
	public function action_logout(){
		Auth::instance()->logout();
		$this->redirect('index');
	}
} 