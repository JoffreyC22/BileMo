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
     * Get the value of Brand
     *
     * @return string The brand of the phone.
     */
    public function getBrand()
    {
        return $this->brand;
    }


    /**
     * Set the value of Brand
     *
     * @param string The brand of the phone. brand
     *
     * @return self
     */
    public function setBrand(string $brand)
    {
        $this->brand = $brand;

        return $this;
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
     * Set the value of Operating System
     *
     * @param string The OS of the phone. operating_system
     *
     * @return self
     */
    public function setOperatingSystem(string $operating_system)
    {
        $this->operating_system = $operating_system;

        return $this;
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
     * Set the value of Color
     *
     * @param string The color of the phone. color
     *
     * @return self
     */
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
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
     * Set the value of Screen Size
     *
     * @param string The screen size of the phone. screen_size
     *
     * @return self
     */
    public function setScreenSize(string $screen_size)
    {
        $this->screen_size = $screen_size;

        return $this;
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
     * Set the value of Sim
     *
     * @param string The sim of the phone. sim
     *
     * @return self
     */
    public function setSim(string $sim)
    {
        $this->sim = $sim;

        return $this;
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
     * Set the value of Network
     *
     * @param string The network of the phone. network
     *
     * @return self
     */
    public function setNetwork(string $network)
    {
        $this->network = $network;

        return $this;
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
     * Set the value of Memory
     *
     * @param int The memory of the phone. memory
     *
     * @return self
     */
    public function setMemory(int $memory)
    {
        $this->memory = $memory;

        return $this;
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
     * Set the value of Ram
     *
     * @param int The ram of this phone. ram
     *
     * @return self
     */
    public function setRam(int $ram)
    {
        $this->ram = $ram;

        return $this;
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


    /**
     * Set the value of Photo Resolution
     *
     * @param int The photo resolution of the phone. photo_resolution
     *
     * @return self
     */
    public function setPhotoResolution(int $photo_resolution)
    {
        $this->photo_resolution = $photo_resolution;

        return $this;
    }

}
