<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturation
 *
 * @ORM\Table(name="facturation")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\FacturationRepository")
 */
class Facturation
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Societe", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Facturation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set societe
     *
     * @param \ClientBundle\Entity\Societe $societe
     *
     * @return Facturation
     */
    public function setSociete(\ClientBundle\Entity\Societe $societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \ClientBundle\Entity\Societe
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set contratVN
     *
     * @param \ClientBundle\Entity\Contrat $contrat
     *
     * @return Facturation
     */
    public function setContrat(\ClientBundle\Entity\Contrat $contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \ClientBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }

}
