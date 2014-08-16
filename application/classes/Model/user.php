<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User{

	public function labels(){
		return array(
			'username'        =>'Логин',
			'firstname'       =>'ФИО',
			'email'           =>'e-mail',
			'password'        =>'Пароль',
			'password_confirm'=>'Подтверждение пароля',
			'lastlogin'       =>'Время'
			);
	}	

	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'password' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}

	public static function get_password_validation($values)
	{
		return Validation::factory($values)
			->rule('password', 'min_length', array(':value', 8))
			->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
	}

	public function uniq_alias($value, $field){
		$page = ORM::factory($this->_object_name)
				->where($field, '=', $value)
				->and_where($this->_primary_key, '!=', $this->pk())
				->find();
		if($page->pk()){
			return false;
		}
		return true;
	}
}