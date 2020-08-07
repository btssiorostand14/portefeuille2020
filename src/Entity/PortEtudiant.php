<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\PortCarnetbord;

/**
 * PortEtudiant
 *
 * @ORM\Table(name="port_etudiant")
 * @ORM\Entity
 */
class PortEtudiant
{
    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $num;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numGroupe", type="integer", nullable=true)
     */
    private $numgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mel", type="string", length=64, nullable=false, options={"fixed"=true})
     */
    private $mel;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $mdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numexam", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $numexam;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valide", type="string", length=1, nullable=true, options={"default"="O","fixed"=true})
     */
    private $valide = 'O';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bac", type="string", length=6, nullable=true)
     */
    private $bac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="spebac", type="string", length=50, nullable=true)
     */
    private $spebac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", length=14, nullable=true, options={"default"="00.00.00.00.00"})
     */
    private $mobile = '00.00.00.00.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=70, nullable=true)
     */
    private $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adrperso", type="string", length=140, nullable=true, options={"default"="ADRESSE PERSO"})
     */
    private $adrperso = 'ADRESSE PERSO';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adrfamille", type="string", length=140, nullable=true, options={"default"="ADRESSE FAMILLE"})
     */
    private $adrfamille = 'ADRESSE FAMILLE';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telperso", type="string", length=14, nullable=true, options={"default"="FIXE PERSO"})
     */
    private $telperso = 'FIXE PERSO';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telfamille", type="string", length=14, nullable=true, options={"default"="FIXE FAMILLE"})
     */
    private $telfamille = 'FIXE FAMILLE';

    /**
     * @var string|null
     *
     * @ORM\Column(name="postbac", type="string", length=100, nullable=true)
     */
    private $postbac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etabbac", type="string", length=140, nullable=true)
     */
    private $etabbac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenaiss", type="date", nullable=true)
     */
    private $datenaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=true)
     */
    private $sexe;

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function getNumgroupe(): ?int
    {
        return $this->numgroupe;
    }

    public function setNumgroupe(?int $numgroupe): self
    {
        $this->numgroupe = $numgroupe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMel(): ?string
    {
        return $this->mel;
    }

    public function setMel(string $mel): self
    {
        $this->mel = $mel;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNumexam(): ?string
    {
        return $this->numexam;
    }

    public function setNumexam(?string $numexam): self
    {
        $this->numexam = $numexam;

        return $this;
    }

    public function getValide(): ?string
    {
        return $this->valide;
    }

    public function setValide(?string $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getBac(): ?string
    {
        return $this->bac;
    }

    public function setBac(?string $bac): self
    {
        $this->bac = $bac;

        return $this;
    }

    public function getSpebac(): ?string
    {
        return $this->spebac;
    }

    public function setSpebac(?string $spebac): self
    {
        $this->spebac = $spebac;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getAdrperso(): ?string
    {
        return $this->adrperso;
    }

    public function setAdrperso(?string $adrperso): self
    {
        $this->adrperso = $adrperso;

        return $this;
    }

    public function getAdrfamille(): ?string
    {
        return $this->adrfamille;
    }

    public function setAdrfamille(?string $adrfamille): self
    {
        $this->adrfamille = $adrfamille;

        return $this;
    }

    public function getTelperso(): ?string
    {
        return $this->telperso;
    }

    public function setTelperso(?string $telperso): self
    {
        $this->telperso = $telperso;

        return $this;
    }

    public function getTelfamille(): ?string
    {
        return $this->telfamille;
    }

    public function setTelfamille(?string $telfamille): self
    {
        $this->telfamille = $telfamille;

        return $this;
    }

    public function getPostbac(): ?string
    {
        return $this->postbac;
    }

    public function setPostbac(?string $postbac): self
    {
        $this->postbac = $postbac;

        return $this;
    }

    public function getEtabbac(): ?string
    {
        return $this->etabbac;
    }

    public function setEtabbac(?string $etabbac): self
    {
        $this->etabbac = $etabbac;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(?\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
	
	


}
