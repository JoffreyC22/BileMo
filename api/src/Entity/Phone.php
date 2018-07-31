<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Phone entity
 *
 * @ApiResource
 * @ORM\Entity
 */
class Phone
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
     * @var string The brand of the phone.
     *
     * @ORM\Column
     */
    public $brand;


    /**
     * @var string The OS of the phone.
     *
     * @ORM\Column
     */
    public $operating_system;


    /**
     * @var string The color of the phone.
     *
     * @ORM\Column
     */
    public $color;


    /**
     * @var string The screen size of the phone.
     *
     * @ORM\Column(nullable=true)
     */
    public $screen_size;


    /**
     * @var string The sim of the phone.
     *
     * @ORM\Column(nullable=true)
     */
    public $sim;


    /**
     * @var string The network of the phone.
     *
     * @ORM\Column(nullable=true)
     */
    public $network;


    /**
     * @var int The memory of the phone.
     *
     * @ORM\Column(type="integer")
     */
    private $memory;


    /**
     * @var int The ram of this phone.
     *
     * @ORM\Column(type="integer")
     */
    private $ram;


    /**
     * @var int The photo resolution of the phone.
     *
     * @ORM\Column(type="integer")
     */
    private $photo_resolution;
}
