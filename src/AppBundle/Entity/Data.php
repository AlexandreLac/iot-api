<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DataRepository")
 */
class Data
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="gaz", type="string", length=255)
     */
    private $gaz;

    /**
     * @var string
     *
     * @ORM\Column(name="particule_fine", type="string", length=255)
     */
    private $particuleFine;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Data
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Data
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Data
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set gaz
     *
     * @param string $gaz
     *
     * @return Data
     */
    public function setGaz($gaz)
    {
        $this->gaz = $gaz;

        return $this;
    }

    /**
     * Get gaz
     *
     * @return string
     */
    public function getGaz()
    {
        return $this->gaz;
    }

    /**
     * Set particuleFine
     *
     * @param string $particuleFine
     *
     * @return Data
     */
    public function setParticuleFine($particuleFine)
    {
        $this->particuleFine = $particuleFine;

        return $this;
    }

    /**
     * Get particuleFine
     *
     * @return string
     */
    public function getParticuleFine()
    {
        return $this->particuleFine;
    }
}
