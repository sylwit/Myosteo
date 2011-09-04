<?php

namespace Cwsf2\MyosteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {

      $entityManager = $this->get('doctrine.orm.entity_manager');
      $therap = $entityManager->find('Cwsf2\MyosteoBundle\Entity\Therapist', 1);

   $secs = $therap->getSecretaries();
 foreach($secs as $sec) {
     echo $therap;
 }
  //echo $therap->getEmail();
   
/*
      $user = new User();
        $user->getGroups()->add($group);
*/


        return $this->render('Cwsf2MyosteoBundle:Default:index.html.twig');
    }
}
