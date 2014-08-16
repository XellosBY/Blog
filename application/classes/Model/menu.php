<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Menu extends Model{
	public function navi_cat()
	{
		return array(
			'horror'   =>'ужасы',
			'anekdot'	=>'анекдот',
			'tragedy'   =>'трагедия',
			'story'	=>'рассказ',
			);
	}
}