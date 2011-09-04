<?php

namespace Cwsf2\MyosteoBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Cwsf2\MyosteoBundle\Entity\Therapist;
use Cwsf2\MyosteoBundle\Entity\Secretary;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "therapist" = "Therapist", "secretary" = "Secretary"})
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->algorithm    = 'sha512';
        $this->password     = 'cwsf2';
        $this->enabled      = 1;
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
     * Check if user is a Therapist
     *
     * @return integer 
     */
    public function isTherapist()
    {
        return ($this instanceof Therapist);
    }

    /**
     * Check if user is a Secretary
     *
     * @return integer 
     */
    public function isSecretary()
    {
        return ($this instanceof Secretary);
    }
    
    
}