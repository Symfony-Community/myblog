<h2><?php echo $post->getTitulo() ?></h2>
<p><u><?php echo $post->getTipo() ?></u></p>
<p><?php echo $post->getDescripcion() ?></p>
<hr/>

<!-- Comentarios -->
<h3>Comentarios</h3>
<?php if($sf_user->hasAttribute('comentario_exitoso')): ?>
	<p><strong>El comentario se ha guardado exitosamente.</strong></p>
<?php endif; ?>
<form action="" method="POST">
	
	<div>
		<?php echo $form['email']->renderLabel('Tu email'); ?>
		<?php echo $form['email']->renderError(); ?>
		<?php echo $form['email']->render(); ?>
	</div>

	<div>
		<?php echo $form['contenido']->renderLabel('Comentario'); ?>
		<?php echo $form['contenido']->renderError(); ?>
		<?php echo $form['contenido']->render(); ?>
	</div>

	<?php echo $form->renderHiddenFields(); ?>
	<button type="submit">Comentar</button>
</form>

<?php if(count($comentarios)): ?>
	
	<?php foreach($comentarios as $comentario): ?>

		<div class="comentario">
			<p>
				<?php echo $comentario->getEmail()." comento:"; ?> <br/>
				<?php echo $comentario->getContenido(); ?>
			</p>
		</div>

	<?php endforeach; ?>

<?php endif; ?>

<hr/>
<p>
	<a href="<?php echo url_for('@posts'); ?>">Volver al listado</a>
</p>