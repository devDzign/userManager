<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ServiceRepository")
 */
class Service
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
     * @var bool
     *
     * @ORM\Column(name="vehicule_neuf", type="boolean")
     */
    private $vehiculeNeuf;

    /**
     * @var bool
     *
     * @ORM\Column(name="vehicule_o", type="boolean")
     */
    private $vehiculeO;

    /**
     * @var bool
     *
     * @ORM\Column(name="service_av", type="boolean")
     */
    private $serviceAv;

    /**
     * @var bool
     *
     * @ORM\Column(name="piece_rechange", type="boolean")
     */
    private $pieceRechange;

    /**
     * @ORM\OneToOne(targetEntity="ClientBundle\Entity\Configuration", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $configuration;


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
     * Set vehiculeNeuf
     *
     * @param boolean $vehiculeNeuf
     *
     * @return Service
     */
    public function setVehiculeNeuf($vehiculeNeuf)
    {
        $this->vehiculeNeuf = $vehiculeNeuf;

        return $this;
    }

    /**
     * Get vehiculeNeuf
     *
     * @return bool
     */
    public function getVehiculeNeuf()
    {
        return $this->vehiculeNeuf;
    }

    /**
     * Set vehiculeO
     *
     * @param string $vehiculeO
     *
     * @return Service
     */
    public function setVehiculeO($vehiculeO)
    {
        $this->vehiculeO = $vehiculeO;

        return $this;
    }

    /**
     * Get vehiculeO
     *
     * @return string
     */
    public function getVehiculeO()
    {
        return $this->vehiculeO;
    }

    /**
     * Set serviceAv
     *
     * @param boolean $serviceAv
     *
     * @return Service
     */
    public function setServiceAv($serviceAv)
    {
        $this->serviceAv = $serviceAv;

        return $this;
    }

    /**
     * Get serviceAv
     *
     * @return boolean
     */
    public function getServiceAv()
    {
        return $this->serviceAv;
    }

    /**
     * Set pieceRechange
     *
     * @param boolean $pieceRechange
     *
     * @return Service
     */
    public function setPieceRechange($pieceRechange)
    {
        $this->pieceRechange = $pieceRechange;

        return $this;
    }

    /**
     * Get pieceRechange
     *
     * @return boolean
     */
    public function getPieceRechange()
    {
        return $this->pieceRechange;
    }

    /**
     * Set configuration
     *
     * @param \ClientBundle\Entity\Configuration $configuration
     *
     * @return Service
     */
    public function setConfiguration(\ClientBundle\Entity\Configuration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return \ClientBundle\Entity\Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
