<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?=$site['title']?></title>
<? foreach($styles as $style): ?>
	<?=html::style($style)?>
<? endforeach;?>
<? foreach($scripts as $script): ?>
	<?=html::script($script)?>
<? endforeach;?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
	<h1><?=$name?></h1>
	<h2><?=$site['description']?></h2>
		</div>
			<div id="search">
				<?=Form::open('index/search', array('method'=>'get'))?>
					<fieldset>
						<?=Form::input('search','',array('size'=>15, 'id'=>'search-text', 'type'=>'text'))?>
						<?=Form::submit('Submit','go!',array('id'=>'search-submit'))?>
					</fieldset>
				<?=Form::close();?>
			</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="<?=URL::site('index')?>">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="page">
		<div id="content">
			<?if(isset($block_center)):?>
				<?=$block_center?>
			<?endif;?>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<?if(isset($block_reg)):?>
				<?=$block_reg?>
			<?endif;?>
			<?if(isset($block_admin)):?>
				<?=$block_admin?>
			<?endif;?>
			<?if(isset($navi_menu)):?>
				<?foreach($navi_menu as $nM):?>
					<?=$nM?>
				<?endforeach?>
			<?endif;?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id='footer'>
		<p>Copyright &copy; 2006 Sitename.com. Designed by <a href="http://www.freecsstemplates.org" class="link1">Free CSS Templates</a></p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
