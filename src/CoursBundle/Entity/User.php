<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as FosUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\UserRepository")
 */
class User extends FOSUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Historic", mappedBy="user")
     */
    private $historics;

    /**
     * @return mixed
     */
    public function getHistorics()
    {
        return $this->historics;
    }

    /**
     * @param mixed $historics
     */
    public function setHistorics($historics)
    {
        $this->historics = $historics;
    }

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

