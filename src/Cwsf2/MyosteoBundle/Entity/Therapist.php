<?php

namespace Cwsf2\MyosteoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="therapist")
 */
class Therapist extends User
{
    const ROLE_THERAPIST = 'ROLE_THERAPIST';
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $adeli;
    
    public function __construct()
    {
        parent::__construct();
        $this->roles[] = self::ROLE_THERAPIST;
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
}