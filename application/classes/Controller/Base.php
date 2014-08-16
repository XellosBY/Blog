<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'v_base';
	public function before(){
		parent::before();
		$this->auth = Auth::instance();
		$this->user = $this->auth->get_user();
		
		$config = Kohana::$config->load('Conf');
		$this->template->name     = $config->get('site_name');
		$this->template->site     = $config->get('site');
		$this->template->styles   = array('media/css/style.css');
		$this->template->scripts  = array();

		$this->template->block_right  = null;
		$this->template->block_admin  = null;
		$this->template->block_center = null;

		$widget = Request::factory('widgets/menu')->execute();	
		$this->template->navi_menu = array($widget);

		$users = ORM::factory('user');
		$role = ORM::factory('role')->where('name','=','login')->find();

			if(Auth::instance()->logged_in()){
			
			$user = $this->auth->get_user();
			$UserTitle = $this->user->username;

			$this->template->block_reg = View::factory('auth/v_logged', array(
										'user' => $user));
			} else{

			$data = null;
			$this->template->block_reg    = View::factory('auth/v_auth_login', array(
										'data' => $data));
			}

	}

	public function action_index()
	{
		$this->redirect('index');
	}

} 
