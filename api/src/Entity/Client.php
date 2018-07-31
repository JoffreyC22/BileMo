<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
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
     * @var string The model of the phone.
     *
     * @ORM\Column
     */
    public $model;


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


    /**
     * Get the value of Model
     *
     * @return string The model of the phone.
     */
    public function getModel()
    {
        return $this->model;
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
     * Get the value of Users
     *
     * @return User[] Available users for this client.
     */
    public function getUsers()
    {
        return $this->users;
    }

}
