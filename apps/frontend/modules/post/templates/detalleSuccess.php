<h2><?php echo $post->getTitulo() ?></h2>
<p><u><?php echo $post->getTipo() ?></u></p>
<p><?php echo $post->getDescripcion() ?></p>
<hr/>
<p>
	<a href="<?php echo url_for('@posts'); ?>">Volver al listado</a>
</p>