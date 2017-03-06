<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientVN
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ContratRepository")
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="contrat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Societe", inversedBy="clientVNs")
     */
    private $societe;

    /**
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Facturation", mappedBy="contrat")
     * @ORM\JoinColumn(nullable=true)
     */
    private $facturations;

    /**
     * @var string
     *
     * @ORM\Column(name="responsableClient", type="string", length=255)
     */
    private $respinsableClient;

    /**
     * @var string
     *
     * @ORM\Column(name="configurationContact", type="string", length=255)
     */
    private $configurationContact;


    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set configuration
     *
     * @param string $configuration
     *
     * @return ClientVN
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return ClientVN
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
     * Set facturation
     *
     * @param string $facturation
     *
     * @return ClientVN
     */
    public function setFacturation($facturation)
    {
        $this->facturation = $facturation;

        return $this;
    }

    /**
     * Get facturation
     *
     * @return string
     */
    public function getFacturation()
    {
        return $this->facturation;
    }

    /**
     * Set responsableClient
     *
     * @param string $responsableClient
     *
     * @return ClientVN
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
     * Add facturation
     *
     * @param \ClientBundle\Entity\Facturation $facturation
     *
     * @return ContratVN
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

    /**
     * Set respinsableClient
     *
     * @param string $respinsableClient
     *
     * @return Contrat
     */
    public function setRespinsableClient($respinsableClient)
    {
        $this->respinsableClient = $respinsableClient;

        return $this;
    }

    /**
     * Get respinsableClient
     *
     * @return string
     */
    public function getRespinsableClient()
    {
        return $this->respinsableClient;
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
}
