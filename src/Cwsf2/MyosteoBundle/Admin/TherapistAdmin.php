<?php
namespace Cwsf2\MyosteoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use FOS\UserBundle\Security\Encoder\EncoderFactory;

class TherapistAdmin extends Admin
{

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('username')
            ->add('email')
        ;
    }
    
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username')
            ->add('email')
        ;
    }    
    
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('username')
            ->add('email')
        ;
    }

    public function prePersist($user)
    {
        $this->preUpdate($user);
    }
    
    public function preUpdate($user)
    {
        // TODO : Arg : C'est crade, mais c'est pas nous ! 
        $user->setPassword(hash($user->getAlgorithm(), $user->getPassword().'{'.$user->getSalt().'}', false));
    }

}