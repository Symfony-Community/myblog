<?php

/**
 * content actions.
 *
 * @package    sf_sandbox
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }

  public function executeHome(sfWebRequest $request)
  {
    $this->fecha = date('d/m/Y'); 
  }

  public function executeContactenos(sfWebRequest $request)
  {
    
  }

  public function executeQuienesSomos(sfWebRequest $request)
  {
    
  }
}
