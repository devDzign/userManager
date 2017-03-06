<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\SocieteRepository")
 */
class Societe
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
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroSiret", type="integer", unique=true)
     */
    private $numeroSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroBic", type="string", length=11)
     */
    private $numeroBic;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSociete", type="string", length=255)
     */
    private $nomSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonSocial", type="string", length=255)
     */
    private $raisonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", nullable=true)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="log", type="float", nullable=true)
     */
    private $log;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone1", type="string", length=10, nullable=true)
     */
    private $telephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=10, nullable=true)
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="villeProximite", type="string", length=255, nullable=true)
     */
    private $villeProximite;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComercial", type="string", length=255)
     */
    private $nomComercial;

    /**
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\TypeClient", inversedBy="societe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeClient;

    /**
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Societe")
     */
    private $groupe;

    /**
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Contact", mappedBy="societe")
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Contrat", mappedBy="societe")
     * @ORM\JoinColumn(nullable=true)
     */
    private $contrats;


    /**
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Facturation", mappedBy="societe")
     * @ORM\JoinColumn(nullable=true)
     */
    private $facturations;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Societe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set numeroSiret
     *
     * @param integer $numeroSiret
     *
     * @return Societe
     */
    public function setNumeroSiret($numeroSiret)
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    /**
     * Get numeroSiret
     *
     * @return int
     */
    public function getNumeroSiret()
    {
        return $this->numeroSiret;
    }

    /**
     * Set numeroBic
     *
     * @param string $numeroBic
     *
     * @return Societe
     */
    public function setNumeroBic($numeroBic)
    {
        $this->numeroBic = $numeroBic;

        return $this;
    }

    /**
     * Get numeroBic
     *
     * @return string
     */
    public function getNumeroBic()
    {
        return $this->numeroBic;
    }

    /**
     * Set nomSociete
     *
     * @param string $nomSociete
     *
     * @return Societe
     */
    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;

        return $this;
    }

    /**
     * Get nomSociete
     *
     * @return string
     */
    public function getNomSociete()
    {
        return $this->nomSociete;
    }

    /**
     * Set raisonSocial
     *
     * @param string $raisonSocial
     *
     * @return Societe
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    /**
     * Get raisonSocial
     *
     * @return string
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Societe
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Societe
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Societe
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Societe
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set log
     *
     * @param float $log
     *
     * @return Societe
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return float
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set telephone1
     *
     * @param string $telephone1
     *
     * @return Societe
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     *
     * @return Societe
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Societe
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Societe
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set villeProximite
     *
     * @param string $villeProximite
     *
     * @return Societe
     */
    public function setVilleProximite($villeProximite)
    {
        $this->villeProximite = $villeProximite;

        return $this;
    }

    /**
     * Get villeProximite
     *
     * @return string
     */
    public function getVilleProximite()
    {
        return $this->villeProximite;
    }

    /**
     * Set nomComercial
     *
     * @param string $nomComercial
     *
     * @return Societe
     */
    public function setNomComercial($nomComercial)
    {
        $this->nomComercial = $nomComercial;

        return $this;
    }

    /**
     * Get nomComercial
     *
     * @return string
     */
    public function getNomComercial()
    {
        return $this->nomComercial;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     *
     * @return Societe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set typeClient
     *
     * @param string $typeClient
     *
     * @return Societe
     */
    public function setTypeClient($typeClient)
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    /**
     * Get typeClient
     *
     * @return string
     */
    public function getTypeClient()
    {
        return $this->typeClient;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Societe
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Add contact
     *
     * @param \ClientBundle\Entity\Contact $contact
     *
     * @return Societe
     */
    public function addContact(\ClientBundle\Entity\Contact $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \ClientBundle\Entity\Contact $contact
     */
    public function removeContact(\ClientBundle\Entity\Contact $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Add contratVN
     *
     * @param \ClientBundle\Entity\Contrat $contrat
     *
     * @return Societe
     */
    public function addContrat(\ClientBundle\Entity\ContratVN $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contratVN
     *
     * @param \ClientBundle\Entity\Contrat $contrat
     */
    public function removeContratVN(\ClientBundle\Entity\Contrat $contrat)
    {
        $this->contratVNs->removeElement($contrat);
    }

    /**
     * Get contratVNs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }

    /**
     * Add facturation
     *
     * @param \ClientBundle\Entity\Facturation $facturation
     *
     * @return Societe
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
