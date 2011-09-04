<?php

namespace Cwsf2\MyosteoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="therapist")
 */
class Therapist extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

     /**
     * @ORM\ManyToMany(targetEntity="Secretary", mappedBy="therapists")
     */
    protected $secretaries;
    
    
    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $adeli;
    
    public function __construct()
    {
        parent::__construct();
        $this->secretaries = new ArrayCollection();
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
     * Set adeli
     *
     * @param string $adeli
     */
    public function setAdeli($adeli)
    {
        $this->adeli = $adeli;
    }

    /**
     * Get adeli
     *
     * @return string 
     */
    public function getAdeli()
    {
        return $this->adeli;
    }

    /**
     * Add secretaries
     *
     * @param Cwsf2\MyosteoBundle\Entity\Secretary $secretaries
     */
    public function addSecretary(\Cwsf2\MyosteoBundle\Entity\Secretary $secretaries)
    {
        $this->secretaries[] = $secretaries;
    }

    /**
     * Get secretaries
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSecretaries()
    {
        return $this->secretaries;
    }
}