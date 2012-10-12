<h2>Posts Recientes</h2>

<?php foreach($posts as $post): ?>
	
	<h3>
		<a href="<?php echo url_for('@post_detail?slug='.$post->getSlug()); ?>"><?php echo $post->getTitulo(); ?></a>
	</h3>
	<p><?php echo $post->getDescripcion(); ?></p>
<?php endforeach; ?>