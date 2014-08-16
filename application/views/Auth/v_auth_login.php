Вход пользователя <a href='<?=URL::site('auth/index')?>'>регистрация</a>
<?=Form::open('auth/login')?>
<table width='100px', cellpadding='5'>
	<tr>
		<td>
		<?=Form::label('username','Введите логин')?>
		</td>
		<td>
		<?=Form::input('username',$data['username'],array('size'=>20))?>
		</td>
	</tr>
	<tr>
		<td>
		<?=Form::label('password','Введите пароль')?>
		</td>
		<td>
		<?=Form::password('password',$data['password'],array('size'=>20))?>
		</td>
	</tr>
	<tr>
		<td colspan='2' alight='left'>
			<?=Form::submit('submit','Войти')?>
		</td>
	</tr>
</table>			
<?=Form::close();?>
