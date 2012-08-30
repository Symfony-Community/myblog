<?php

/**
 * Post form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PostForm extends BasePostForm
{
  public function configure()
  {
  	unset(
  		$this['email'],
  		$this['fecha'],
  		$this['es_activo'],
  		$this['slug'],
  		$this['created_at'],
  		$this['updated_at']
	);
  }
}
