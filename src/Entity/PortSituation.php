<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortSituation
 *
 * @ORM\Table(name="port_situation", indexes={@ORM\Index(name="informProf", columns={"informProf"}), @ORM\Index(name="ref", columns={"ref"})})
 * @ORM\Entity
 */
class PortSituation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="numEtudiant", type="integer", nullable=false)
     */
    private $numetudiant;

    /**
     * @var int
     *
     * @ORM\Column(name="codeLocalisation", type="smallint", nullable=false)
     */
    private $codelocalisation;

    /**
     * @var int
     *
     * @ORM\Column(name="codeSource", type="smallint", nullable=false)
     */
    private $codesource;

    /**
     * @var int
     *
     * @ORM\Column(name="codeType", type="smallint", nullable=false)
     */
    private $codetype;

    /**
     * @var int
     *
     * @ORM\Column(name="codeCadre", type="smallint", nullable=false)
     */
    private $codecadre;

    /**
     * @var string
     *
     * @ORM\Column(name="libcourt", type="string", length=100, nullable=false)
     */
    private $libcourt;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=320, nullable=false)
     */
    private $descriptif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contexte", type="string", length=320, nullable=true)
     */
    private $contexte;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datedebut", type="date", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin", type="date", nullable=true)
     */
    private $datefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="environnement", type="string", length=255, nullable=true)
     */
    private $environnement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moyen", type="string", length=255, nullable=true)
     */
    private $moyen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avisperso", type="string", length=320, nullable=true)
     */
    private $avisperso;

    /**
     * @var string
     *
     * @ORM\Column(name="valide", type="string", length=1, nullable=false, options={"default"="O","fixed"=true})
     */
    private $valide = 'O';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datemodif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var bool
     *
     * @ORM\Column(name="valideeProf", type="boolean", nullable=false)
     */
    private $valideeprof = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="informProf", type="integer", nullable=false)
     */
    private $informprof;

    /**
     * @var bool
     *
     * @ORM\Column(name="signalEtud", type="boolean", nullable=false)
     */
    private $signaletud;

    public function getRef(): ?int
    {
        return $this->ref;
    }

    public function getNumetudiant(): ?int
    {
        return $this->numetudiant;
    }

    public function setNumetudiant(int $numetudiant): self
    {
        $this->numetudiant = $numetudiant;

        return $this;
    }

    public function getCodelocalisation(): ?int
    {
        return $this->codelocalisation;
    }

    public function setCodelocalisation(int $codelocalisation): self
    {
        $this->codelocalisation = $codelocalisation;

        return $this;
    }

    public function getCodesource(): ?int
    {
        return $this->codesource;
    }

    public function setCodesource(int $codesource): self
    {
        $this->codesource = $codesource;

        return $this;
    }

    public function getCodetype(): ?int
    {
        return $this->codetype;
    }

    public function setCodetype(int $codetype): self
    {
        $this->codetype = $codetype;

        return $this;
    }

    public function getCodecadre(): ?int
    {
        return $this->codecadre;
    }

    public function setCodecadre(int $codecadre): self
    {
        $this->codecadre = $codecadre;

        return $this;
    }

    public function getLibcourt(): ?string
    {
        return $this->libcourt;
    }

    public function setLibcourt(string $libcourt): self
    {
        $this->libcourt = $libcourt;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getContexte(): ?string
    {
        return $this->contexte;
    }

    public function setContexte(?string $contexte): self
    {
        $this->contexte = $contexte;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(?\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(?\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(?string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getMoyen(): ?string
    {
        return $this->moyen;
    }

    public function setMoyen(?string $moyen): self
    {
        $this->moyen = $moyen;

        return $this;
    }

    public function getAvisperso(): ?string
    {
        return $this->avisperso;
    }

    public function setAvisperso(?string $avisperso): self
    {
        $this->avisperso = $avisperso;

        return $this;
    }

    public function getValide(): ?string
    {
        return $this->valide;
    }

    public function setValide(string $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getDatemodif(): ?\DateTimeInterface
    {
        return $this->datemodif;
    }

    public function setDatemodif(?\DateTimeInterface $datemodif): self
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    public function getValideeprof(): ?bool
    {
        return $this->valideeprof;
    }

    public function setValideeprof(bool $valideeprof): self
    {
        $this->valideeprof = $valideeprof;

        return $this;
    }

    public function getInformprof(): ?int
    {
        return $this->informprof;
    }

    public function setInformprof(int $informprof): self
    {
        $this->informprof = $informprof;

        return $this;
    }

    public function getSignaletud(): ?bool
    {
        return $this->signaletud;
    }

    public function setSignaletud(bool $signaletud): self
    {
        $this->signaletud = $signaletud;

        return $this;
    }


}
