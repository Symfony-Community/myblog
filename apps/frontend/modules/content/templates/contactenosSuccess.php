<h2>Contactenos</h2>
<p>Por favor no dudes en contactarme con preguntas, inquietudes y/o sugerencias.</br>
Desde ya tu feedback es siempre bienvenido. Gracias !!
</p>
<form action="<?php echo url_for('@contactenos_enviar'); ?>" method="POST">
	
	<div>
		<?php echo $form['nombre']->renderRow(); ?>
	</div>

	<div>
		<?php echo $form['apellido']->renderRow(); ?>
	</div>

	<div>
		<?php echo $form['email']->renderRow(); ?>
	</div>

	<div>
		<?php echo $form['asunto']->renderRow(); ?>
	</div>

	<div>
		<?php echo $form['mensaje']->renderRow(); ?>
	</div>

	<?php echo $form->renderHiddenFields(); ?>
	<button type="submit">Enviar</button>
</form>