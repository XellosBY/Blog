$(function(){
	$('#multi').MultiFile({
		accept:'jpg, gif,bmp,png', max:15, STRING:{
		remove:'&times;',
		selected: 'выбрать $file',
		denied:'неверный тип файла',
		duplicate: 'этот файл уже выбран'	
		}
	});
});
