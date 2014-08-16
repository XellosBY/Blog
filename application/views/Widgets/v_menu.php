<br />
<br />
<h3><?=$menu_title?></h3>
<?foreach ($block_menu as $index_menu=>$menu):?>
	<ul>
		<li><a href="<?=URL::site('index/sort?'.$index_menu);?>" class="a"><?=$menu?></a></li>
	</ul>
<?endforeach;?>