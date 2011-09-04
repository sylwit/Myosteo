<?php

namespace Cwsf2\MyosteoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="secretary")
 */
class Secretary extends User
{
    const ROLE_SECRETARY = 'ROLE_SECRETARY';
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


     /**
     * @ORM\ManyToMany(targetEntity="Therapist", inversedBy="secretaries")
     * @ORM\JoinTable(name="therapist_secretary",
     *      joinColumns={@ORM\JoinColumn(name="secretary_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="therapist_id", referencedColumnName="id")}
     *      )
     */
    protected $therapists;
        
   
    public function __construct()
    {
        parent::__construct();
        $this->roles[] = self::ROLE_SECRETARY;
        $this->therapists = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Add therapists
     *
     * @param Cwsf2\MyosteoBundle\Entity\Therapist $therapists
     */
    public function addTherapist(\Cwsf2\MyosteoBundle\Entity\Therapist $therapists)
    {
        $this->therapists[] = $therapists;
    }

    /**
     * Get therapists
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTherapists()
    {
        return $this->therapists;
    }
}