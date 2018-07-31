<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client entity
 *
 * @ApiResource
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string The username of the user.
     *
     * @ORM\Column
     */
    public $username;


    /**
     * @var string The e-mail of the user.
     *
     * @ORM\Column
     */
    public $email;


    /**
     * @var string The password of the user.
     *
     * @ORM\Column
     */
    public $password;


    /**
     * @var User[] Available users for this client.
     *
     * @ORM\OneToMany(targetEntity="User", mappedBy="client")
     */
    public $users;


    /**
     * Get the value of Id
     *
     * @return int The entity Id
     */
    public function getId()
    {
        return $this->id;
    }


    public function __construct() {
        $this->users = new ArrayCollection();
    }
}
