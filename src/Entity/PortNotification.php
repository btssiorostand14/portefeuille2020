<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortNotification
 *
 * @ORM\Table(name="port_notification", indexes={@ORM\Index(name="numGroupe", columns={"numGroupe"}), @ORM\Index(name="redacteur", columns={"redacteur"})})
 * @ORM\Entity
 */
class PortNotification
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=70, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=600, nullable=false)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="echeance", type="date", nullable=false)
     */
    private $echeance;

    /**
     * @var \PortProfesseur
     *
     * @ORM\ManyToOne(targetEntity="PortProfesseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="redacteur", referencedColumnName="num")
     * })
     */
    private $redacteur;

    /**
     * @var \PortGroupe
     *
     * @ORM\ManyToOne(targetEntity="PortGroupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numGroupe", referencedColumnName="num")
     * })
     */
    private $numgroupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getEcheance(): ?\DateTimeInterface
    {
        return $this->echeance;
    }

    public function setEcheance(\DateTimeInterface $echeance): self
    {
        $this->echeance = $echeance;

        return $this;
    }

    public function getRedacteur(): ?PortProfesseur
    {
        return $this->redacteur;
    }

    public function setRedacteur(?PortProfesseur $redacteur): self
    {
        $this->redacteur = $redacteur;

        return $this;
    }

    public function getNumgroupe(): ?PortGroupe
    {
        return $this->numgroupe;
    }

    public function setNumgroupe(?PortGroupe $numgroupe): self
    {
        $this->numgroupe = $numgroupe;

        return $this;
    }


}
