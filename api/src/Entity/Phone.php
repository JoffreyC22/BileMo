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
     * Get the value of Brand
     *
     * @return string The brand of the phone.
     */
    public function getBrand()
    {
        return $this->brand;
    }


    /**
     * Get the value of Operating System
     *
     * @return string The OS of the phone.
     */
    public function getOperatingSystem()
    {
        return $this->operating_system;
    }


    /**
     * Get the value of Color
     *
     * @return string The color of the phone.
     */
    public function getColor()
    {
        return $this->color;
    }


    /**
     * Get the value of Screen Size
     *
     * @return string The screen size of the phone.
     */
    public function getScreenSize()
    {
        return $this->screen_size;
    }


    /**
     * Get the value of Sim
     *
     * @return string The sim of the phone.
     */
    public function getSim()
    {
        return $this->sim;
    }


    /**
     * Get the value of Network
     *
     * @return string The network of the phone.
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * Get the value of Memory
     *
     * @return int The memory of the phone.
     */
    public function getMemory()
    {
        return $this->memory;
    }


    /**
     * Get the value of Ram
     *
     * @return int The ram of this phone.
     */
    public function getRam()
    {
        return $this->ram;
    }


    /**
     * Get the value of Photo Resolution
     *
     * @return int The photo resolution of the phone.
     */
    public function getPhotoResolution()
    {
        return $this->photo_resolution;
    }
}
