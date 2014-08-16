<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Post extends ORM{
	protected $_belongs_to = array(
		'user' => array(
			'model' => 'user',
			'foreign_key' => 'user_id'
			)
		);
	protected $_has_many = array(
		'categorie' => array(
			'model' => 'categorie',
			
			'through'=>'posts_categories',
			'far_key'=>'cat_id',
			)
		);
}