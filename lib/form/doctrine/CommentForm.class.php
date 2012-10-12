<?php

/**
 * Comment form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
	public function configure()
	{
		unset($this['created_at'], $this['updated_at']);

		//Widgets
		$this->widgetSchema['post_id'] = new sfWidgetFormInputHidden();
		$this->widgetSchema['contenido'] = new sfWidgetFormTextarea();

		//Validators
		$this->validatorSchema['email'] = new sfValidatorEmail(
												array('required' => true),
												array('required' => 'Campo requerido.', 'invalid' => 'Debes ingresar una direccion de email valido.')
										  );
		$this->validatorSchema['contenido'] = new sfValidatorString(
												array('required' => true, 'min_length' => 5),
												array('required' => 'Campo requerido.', 'min_length' => 'Debes ingresar al menos %min_length% caracteres.')
											);

		//Setemaos el post en el cual estamos comentando
		if($this->getOption('post_id'))
		{
			$this->setDefault('post_id', $this->getOption('post_id'));
		}
	}
}
