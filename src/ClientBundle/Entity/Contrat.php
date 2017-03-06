<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="responsableClient", type="string", length=255)
     */
    private $responsableClient;

    /**
     * @var string
     *
     * @ORM\Column(name="configurationContact", type="string", length=255)
     */
    private $configurationContact;

    /**
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Societe", inversedBy="Contrats")
     */
    private $societe;

    /**
     * @ORM\ManyToMany(targetEntity="ClientBundle\Entity\Options", cascade={"persist"})
     * @ORM\JoinTable(name="option_Contrat")
     */
    private $services;

    /**
     * @ORM\ManyToMany(targetEntity="ClientBundle\Entity\Facturation", cascade={"persist"})
     * @ORM\JoinTable(name="facturation_Contrat")
     */
    private $facturations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
        $this->facturations = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set societe
     *
     * @param string $societe
     *
     * @return Contrat
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set responsableClient
     *
     * @param string $responsableClient
     *
     * @return Contrat
     */
    public function setResponsableClient($responsableClient)
    {
        $this->responsableClient = $responsableClient;

        return $this;
    }

    /**
     * Get responsableClient
     *
     * @return string
     */
    public function getResponsableClient()
    {
        return $this->responsableClient;
    }

    /**
     * Set configurationContact
     *
     * @param string $configurationContact
     *
     * @return Contrat
     */
    public function setConfigurationContact($configurationContact)
    {
        $this->configurationContact = $configurationContact;

        return $this;
    }

    /**
     * Get configurationContact
     *
     * @return string
     */
    public function getConfigurationContact()
    {
        return $this->configurationContact;
    }

    /**
     * Add service
     *
     * @param \ClientBundle\Entity\Options $service
     *
     * @return Contrat
     */
    public function addService(\ClientBundle\Entity\Options $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \ClientBundle\Entity\Options $service
     */
    public function removeService(\ClientBundle\Entity\Options $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add facturation
     *
     * @param \ClientBundle\Entity\Facturation $facturation
     *
     * @return Contrat
     */
    public function addFacturation(\ClientBundle\Entity\Facturation $facturation)
    {
        $this->facturations[] = $facturation;

        return $this;
    }

    /**
     * Remove facturation
     *
     * @param \ClientBundle\Entity\Facturation $facturation
     */
    public function removeFacturation(\ClientBundle\Entity\Facturation $facturation)
    {
        $this->facturations->removeElement($facturation);
    }

    /**
     * Get facturations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFacturations()
    {
        return $this->facturations;
    }
}
