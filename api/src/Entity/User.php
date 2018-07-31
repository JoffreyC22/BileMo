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
}
