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
      $this->form = new ContactForm();
  }

  public function executeContactenosEnviar(sfWebRequest $request)
  {
      if($request->isMethod('POST'))
      {
          $this->form = new ContactForm();
          $this->form->bind($request->getParameter($this->form->getName()));

          if($this->form->isValid())
          {
              //Aca necesitamos mandar el email, porque el formulario es valido!
              $mailer = $this->getMailer();
              $choices = array(
                  1 => 'Portada principal',
                  2 => 'Interesado en symfony-community',
                  3 => 'Mi consulta'
              );
              
              $from = $this->form->getValue('email');
              $subject = $choices[$this->form->getValue('asunto')];
              $body = $this->form->getValue('mensaje');

              $message = Swift_Message::newInstance()
                  ->setFrom($from)
                  ->setTo('emiliano.viada@excedesoft.com')
                  ->setSubject($subject)
                  ->setBody($body);
 
              $sent = $mailer->send($message);

              if($sent)
              {
                  return $this->renderText('<p>El email se ha enviado exitosamente!. <a href="/frontend_dev.php/contactenos">Volver</a></p>');
              }
          }

          $this->setTemplate('contactenos');
      }
      else{
          $this->forward404();
      }
  }

  public function executeQuienesSomos(sfWebRequest $request)
  {
    
  }
}
