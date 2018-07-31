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
     * Get the value of Firstname
     *
     * @return string The firstname of the user.
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Set the value of Firstname
     *
     * @param string The firstname of the user. firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
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
     * Set the value of Lastname
     *
     * @param string The lastname of the user. lastname
     *
     * @return self
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
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


    /**
     * Set the value of Client
     *
     * @param Client The client related to the user. client
     *
     * @return self
     */
    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }

}
