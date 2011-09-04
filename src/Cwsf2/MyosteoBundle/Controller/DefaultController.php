<?php

namespace Cwsf2\MyosteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {

      
      
      $entityManager = $this->get('doctrine.orm.entity_manager');
      $therap = $entityManager->find('Cwsf2\MyosteoBundle\Entity\Therapist', 1);
/*
   $secs = $therap->getSecretaries();
 foreach($secs as $sec) {
     echo $sec->getEmail();;
 }
 */
      
      $user = $this->get('security.context')->getToken()->getUser();
      
      if (is_object($user)){
        if ($user->isTherapist()){
          return $this->render('Cwsf2MyosteoBundle:Default:indexTherapist.html.twig');
        }
        else if ($user->isSecretary()){
          return $this->render('Cwsf2MyosteoBundle:Default:indexSecretary.html.twig');
        } 
      }


      return $this->render('Cwsf2MyosteoBundle:Default:index.html.twig');
    }
}
