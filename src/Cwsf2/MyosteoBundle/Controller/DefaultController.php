<?php

namespace Cwsf2\MyosteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('Cwsf2MyosteoBundle:Default:index.html.twig');
    }
}
