<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 *
 * @ORM\Table(name="plane_model")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlaneModelRepository")
 */
class PlaneModel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=128)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=64, nullable=true)
     */
    private $manufacturer;

    /**
     * @var int
     *
     * @ORM\Column(name="cruiseSpeed", type="smallint")
     */
    private $cruiseSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="planeNBseats", type="smallint")
     */
    private $planeNBseats;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAvailable", type="boolean")
     */
    private $isAvailable;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     *
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return int
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set planeNBseats
     *
     * @param integer $planeNBseats
     *
     * @return PlaneModel
     */
    public function setPlaneNBseats($planeNBseats)
    {
        $this->planeNBseats = $planeNBseats;

        return $this;
    }

    /**
     * Get planeNBseats
     *
     * @return int
     */
    public function getPlaneNBseats()
    {
        return $this->planeNBseats;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return PlaneModel
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
}
