<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu extends Controller_Template {
	public $template = 'widgets/v_menu';

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{	
		$menu_title = 'Сортировка по категориям';
		$this->template->menu_title = $menu_title;
		$block_menu = Model::factory('menu')->navi_cat();
		$this->template->block_menu = $block_menu;
	}

}
