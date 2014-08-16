<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Categorie extends ORM{
	protected $_has_many = array(
		'post' => array(
			'model' => 'post',
			
			'through'=>'posts_categories',
			'far_key'=>'cat_id',
			)
		);

	public function cat()
	{
		return array(
			1   =>'ужасы',
			2	=>'анекдот',
			3   =>'трагедия',
			4	=>'рассказ',
			);
	}
}