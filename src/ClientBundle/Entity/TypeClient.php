<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeClient
 *
 * @ORM\Table(name="type_client")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\TypeClientRepository")
 */
class TypeClient
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
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Societe", mappedBy="typeClient")
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
     * @return TypeClient
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
     * Constructor
     */
    public function __construct()
    {
        $this->societe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add societe
     *
     * @param \ClientBundle\Entity\Societe $societe
     *
     * @return TypeClient
     */
    public function addSociete(\ClientBundle\Entity\Societe $societe)
    {
        $this->societe[] = $societe;

        return $this;
    }

    /**
     * Remove societe
     *
     * @param \ClientBundle\Entity\Societe $societe
     */
    public function removeSociete(\ClientBundle\Entity\Societe $societe)
    {
        $this->societe->removeElement($societe);
    }

    /**
     * Get societe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSociete()
    {
        return $this->societe;
    }
}
