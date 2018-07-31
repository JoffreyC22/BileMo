<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User entity
 *
 * @ApiResource
 * @ORM\Entity
 */
class User
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
     * @var string The firstname of the user.
     *
     * @ORM\Column
     */
    public $firstname;


    /**
     * @var string The lastname of the user.
     *
     * @ORM\Column
     */
    public $lastname;


    /**
     * @var Client The client related to the user.
     *
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="users")
     */
    public $client;


    /**
     * Get the value of Id
     *
     * @return int The entity Id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of Username
     *
     * @return string The username of the user.
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Get the value of Email
     *
     * @return string The e-mail of the user.
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Get the value of Password
     *
     * @return string The password of the user.
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Get the value of Firstname
     *
     * @return string The firstname of the user.
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Get the value of Lastname
     *
     * @return string The lastname of the user.
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    /**
     * Get the value of Client
     *
     * @return Client The client related to the user.
     */
    public function getClient()
    {
        return $this->client;
    }
}
