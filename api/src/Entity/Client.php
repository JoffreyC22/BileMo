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
     * Set the value of Id
     *
     * @param int The entity Id id
     *
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
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
     * Set the value of Model
     *
     * @param string The model of the phone. model
     *
     * @return self
     */
    public function setModel(string $model)
    {
        $this->model = $model;

        return $this;
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
     * Set the value of Username
     *
     * @param string The username of the user. username
     *
     * @return self
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
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
     * Set the value of Email
     *
     * @param string The e-mail of the user. email
     *
     * @return self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
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
     * Set the value of Password
     *
     * @param string The password of the user. password
     *
     * @return self
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
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
