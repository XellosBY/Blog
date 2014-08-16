<?if(isset($posts)):?>
<?foreach ($posts
			->join('users')
			->on('post.user_id','=','users.id')
			->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by('date','DESC')
			->find_all() as $post):?>

	<div class="post">
		<h2 class="title"><a href="<?=URL::site("index/$page/$post->id")?>"><?=$post->post_title?></a></h2>
			<p class="meta">Posted by <b><?=$post->user->username?></b> on <?=$post->date?>
		    <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; 
		    <a href="<?=URL::site("index/$page/$post->id")?>" class="permalink">Full article</a></p>
		<div class="entry">
			<p><?=substr($post->post, 0, 200)?></p>
			<?if($post->photo != 0):?>
				<?/*foreach($post->photo as $p):*/?>
					<?=HTML::image('media/uploads/s_'.$post->photo);?>
				<?/*endforeach;*/?>
			<?endif;?>
			<p align='right' class='hide'><a href="<?=URL::site("account/edit/$post->id")?>">Редактировать пост!</a></p>
			<p align='right' class='hide'><a href="<?=URL::site("account/delete/$post->id")?>">Удалить пост!</a></p>
		
			<p class='comments'>Жанры:
				<?foreach($post->categorie->find_all() as $cat):?>
					<?=$cat->categorie.' '?>
				<?endforeach;?>
			</p>
		</div>
	<hr>
	</div>
<?endforeach;?>
<?endif;?>

		<p><?if(isset($pagination)):?>
			<?=$pagination?>
		<?endif;?></p>
