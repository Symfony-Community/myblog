<form method="post" action="<?php url_for('@post_nuevo') ?>">
	<table>
		<tr><td><?php echo $form->render(); ?></td></tr>
	</table>
	<button type="submit" name="guardar" value="guardar">Guardar</button>
</form>