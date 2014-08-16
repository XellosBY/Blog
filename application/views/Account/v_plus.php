<h2>Добавление записи</h2>

<?=Form::open('', array('enctype'=>'multipart/form-data',
						'method' =>'post'))?>
<table width='100px', cellpadding='5'>
	<tr>
		<td>
		<?=Form::label('post_title','Заголовок')?>
		</td>
		<td>
		<?=Form::input('post_title',$data['post_title'])?>
		</td>
	</tr>
	<tr>
		<td>
		<?=Form::label('photo','Фото')?>
		</td>
		<td>
		<?=Form::file('images[]', array('id'=>'multi'))?>
		</td>
	</tr>
	<tr>
		<td>
		<?=Form::label('categorie','Категория')?>
		</td>
		<td>
		<?=Form::select('categorie',Model::factory('categorie')->cat(),array('id'=>'cat',
																			'multiple'=>'multiple'))?>
		</td>
	</tr>
	<tr>
		<td>
		<?=Form::label('post','Текст записи')?>
		</td>
		<td>
		<?=Form::textarea('post',$data['post'])?>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<?=$captcha?>
		</td>
	</tr>
	<tr>
		<td>
		<?=Form::label('captcha','Введите текст с картинки:')?>
		</td>
		<td>
		<?=Form::input('captcha',$data['captcha'])?>
		</td>
	</tr>
	<tr>
		<td colspan='2' alight='left'>
			<?=Form::submit('submit','Добавить запись')?>
		</td>
	</tr>
</table><br />
<?=Form::close();?>
<?=$message?>


