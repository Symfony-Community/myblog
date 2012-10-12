<?php

/**
 * post actions.
 *
 * @package    sf_sandbox
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->posts = Doctrine::getTable('Post')->getLastPosts();
  }

  public function executeDetalle(sfWebRequest $request)
  {
  	$slug = $request->getParameter('slug');
  	$this->post = Doctrine::getTable('Post')->findOneBySlug($slug);
  }

  public function executeNuevo(sfWebRequest $request)
  {
    $this->form = new PostForm();
    
    if($request->isMethod(sfRequest::POST)) {
      
        $this->form->bind($request->getParameter($this->form->getName()));
        if ($this->form->isValid())
        {
          $post = $this->form->save();

          $this->redirect('@posts');
        }   
    } 
  }
}
