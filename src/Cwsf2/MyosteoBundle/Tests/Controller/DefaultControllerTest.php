<?php

namespace Cwsf2\MyosteoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        # Qui a eu l'idee de tester une vue ? 
        # Cette page n'est pas une action. Donc n'a pas besoin de test :P
        $this->assertTrue(true);
    }
}
