<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="pointVente", type="string", length=255)
     */
    private $pointVente;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPointVente", type="string", length=255)
     */
    private $nomPointVente;

    /**
     * @var bool
     *
     * @ORM\Column(name="statusPointVente", type="boolean")
     */
    private $statusPointVente;

    /**
     * @var string
     *
     * @ORM\Column(name="urlSotock", type="string", length=255)
     */
    private $urlSotock;

    /**
     * @var string
     *
     * @ORM\Column(name="urlExporter", type="string", length=255)
     */
    private $urlExporter;

    /**
     * @var string
     *
     * @ORM\Column(name="urlStats", type="string", length=255)
     */
    private $urlStats;

    /**
     * @var string
     *
     * @ORM\Column(name="urlExporterStats", type="string", length=255)
     */
    private $urlExporterStats;

    /**
     * @var string
     *
     * @ORM\Column(name="urlVitrine", type="string", length=255)
     */
    private $urlVitrine;

    /**
     * @var string
     *
     * @ORM\Column(name="marques", type="string", length=255)
     */
    private $marques;

    /**
     * @var string
     *
     * @ORM\Column(name="horraireOuverture", type="string", length=255)
     */
    private $horraireOuverture;


    /**
     * @var string
     *
     * @ORM\Column(name="stock", type="string", length=255)
     */
    private $stock;

    /**
     * @ORM\OneToOne(targetEntity="ClientBundle\Entity\Service", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;


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
     * Set pointVente
     *
     * @param string $pointVente
     *
     * @return Configuration
     */
    public function setPointVente($pointVente)
    {
        $this->pointVente = $pointVente;

        return $this;
    }

    /**
     * Get pointVente
     *
     * @return string
     */
    public function getPointVente()
    {
        return $this->pointVente;
    }

    /**
     * Set nomPointVente
     *
     * @param string $nomPointVente
     *
     * @return Configuration
     */
    public function setNomPointVente($nomPointVente)
    {
        $this->nomPointVente = $nomPointVente;

        return $this;
    }

    /**
     * Get nomPointVente
     *
     * @return string
     */
    public function getNomPointVente()
    {
        return $this->nomPointVente;
    }

    /**
     * Set statusPointVente
     *
     * @param boolean $statusPointVente
     *
     * @return Configuration
     */
    public function setStatusPointVente($statusPointVente)
    {
        $this->statusPointVente = $statusPointVente;

        return $this;
    }

    /**
     * Get statusPointVente
     *
     * @return bool
     */
    public function getStatusPointVente()
    {
        return $this->statusPointVente;
    }

    /**
     * Set urlSotock
     *
     * @param string $urlSotock
     *
     * @return Configuration
     */
    public function setUrlSotock($urlSotock)
    {
        $this->urlSotock = $urlSotock;

        return $this;
    }

    /**
     * Get urlSotock
     *
     * @return string
     */
    public function getUrlSotock()
    {
        return $this->urlSotock;
    }

    /**
     * Set urlExporter
     *
     * @param string $urlExporter
     *
     * @return Configuration
     */
    public function setUrlExporter($urlExporter)
    {
        $this->urlExporter = $urlExporter;

        return $this;
    }

    /**
     * Get urlExporter
     *
     * @return string
     */
    public function getUrlExporter()
    {
        return $this->urlExporter;
    }

    /**
     * Set urlStats
     *
     * @param string $urlStats
     *
     * @return Configuration
     */
    public function setUrlStats($urlStats)
    {
        $this->urlStats = $urlStats;

        return $this;
    }

    /**
     * Get urlStats
     *
     * @return string
     */
    public function getUrlStats()
    {
        return $this->urlStats;
    }

    /**
     * Set urlExporterStats
     *
     * @param string $urlExporterStats
     *
     * @return Configuration
     */
    public function setUrlExporterStats($urlExporterStats)
    {
        $this->urlExporterStats = $urlExporterStats;

        return $this;
    }

    /**
     * Get urlExporterStats
     *
     * @return string
     */
    public function getUrlExporterStats()
    {
        return $this->urlExporterStats;
    }

    /**
     * Set urlVitrine
     *
     * @param string $urlVitrine
     *
     * @return Configuration
     */
    public function setUrlVitrine($urlVitrine)
    {
        $this->urlVitrine = $urlVitrine;

        return $this;
    }

    /**
     * Get urlVitrine
     *
     * @return string
     */
    public function getUrlVitrine()
    {
        return $this->urlVitrine;
    }

    /**
     * Set marques
     *
     * @param string $marques
     *
     * @return Configuration
     */
    public function setMarques($marques)
    {
        $this->marques = $marques;

        return $this;
    }

    /**
     * Get marques
     *
     * @return string
     */
    public function getMarques()
    {
        return $this->marques;
    }

    /**
     * Set horraireOuverture
     *
     * @param string $horraireOuverture
     *
     * @return Configuration
     */
    public function setHorraireOuverture($horraireOuverture)
    {
        $this->horraireOuverture = $horraireOuverture;

        return $this;
    }

    /**
     * Get horraireOuverture
     *
     * @return string
     */
    public function getHorraireOuverture()
    {
        return $this->horraireOuverture;
    }

    /**
     * Set stock
     *
     * @param string $stock
     *
     * @return Configuration
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set service
     *
     * @param \ClientBundle\Entity\Service $service
     *
     * @return Configuration
     */
    public function setService(\ClientBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \ClientBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
