<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortCarnetbord
 *
 * @ORM\Table(name="port_carnetbord", indexes={@ORM\Index(name="idEtud", columns={"idEtud"}), @ORM\Index(name="codeSource", columns={"codeSource"})})
 * @ORM\Entity
 */
class PortCarnetbord
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
     * @var int
     *
     * @ORM\Column(name="codeSource", type="smallint", nullable=false)
     */
    private $codesource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coordonneesTut", type="string", length=255, nullable=true)
     */
    private $coordonneestut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tutMobile", type="string", length=14, nullable=true)
     */
    private $tutmobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tutTel", type="string", length=14, nullable=true)
     */
    private $tuttel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tutMail", type="string", length=80, nullable=true)
     */
    private $tutmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var int
     *
     * @ORM\Column(name="idEtud", type="integer", nullable=false)
     */
    private $idetud;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSem", type="integer", nullable=false)
     */
    private $nbsem;

    /**
     * @var string
     *
     * @ORM\Column(name="nomentreprise", type="string", length=255, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseentreprise", type="string", length=255, nullable=false)
     */
    private $adresseentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=5, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=90, nullable=false)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="servicestage", type="string", length=200, nullable=true)
     */
    private $servicestage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="directeur", type="string", length=200, nullable=true)
     */
    private $directeur;

    /**
     * @var string
     *
     * @ORM\Column(name="codenaf", type="string", length=5, nullable=false)
     */
    private $codenaf;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=14, nullable=false)
     */
    private $siret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telentreprise", type="string", length=14, nullable=true)
     */
    private $telentreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="faxentreprise", type="string", length=14, nullable=true)
     */
    private $faxentreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="melentreprise", type="string", length=150, nullable=true)
     */
    private $melentreprise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anneeStage", type="integer", nullable=true)
     */
    private $anneestage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avis", type="blob", length=65535, nullable=true)
     */
    private $avis;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFin", type="date", nullable=true)
     */
    private $datefin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dureeStage", type="integer", nullable=true)
     */
    private $dureestage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horLun", type="string", length=80, nullable=true)
     */
    private $horlun;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horMar", type="string", length=80, nullable=true)
     */
    private $hormar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horMer", type="string", length=80, nullable=true)
     */
    private $hormer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horJeu", type="string", length=80, nullable=true)
     */
    private $horjeu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horVen", type="string", length=80, nullable=true)
     */
    private $horven;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horSam", type="string", length=80, nullable=true)
     */
    private $horsam;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="string", length=255, nullable=true)
     */
    private $sujet;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCoordonneestut(): ?string
    {
        return $this->coordonneestut;
    }

    public function setCoordonneestut(?string $coordonneestut): self
    {
        $this->coordonneestut = $coordonneestut;

        return $this;
    }

    public function getTutmobile(): ?string
    {
        return $this->tutmobile;
    }

    public function setTutmobile(?string $tutmobile): self
    {
        $this->tutmobile = $tutmobile;

        return $this;
    }

    public function getTuttel(): ?string
    {
        return $this->tuttel;
    }

    public function setTuttel(?string $tuttel): self
    {
        $this->tuttel = $tuttel;

        return $this;
    }

    public function getTutmail(): ?string
    {
        return $this->tutmail;
    }

    public function setTutmail(?string $tutmail): self
    {
        $this->tutmail = $tutmail;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getIdetud(): ?int
    {
        return $this->idetud;
    }

    public function setIdetud(int $idetud): self
    {
        $this->idetud = $idetud;

        return $this;
    }

    public function getNbsem(): ?int
    {
        return $this->nbsem;
    }

    public function setNbsem(int $nbsem): self
    {
        $this->nbsem = $nbsem;

        return $this;
    }

    public function getNomentreprise(): ?string
    {
        return $this->nomentreprise;
    }

    public function setNomentreprise(string $nomentreprise): self
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    public function getAdresseentreprise(): ?string
    {
        return $this->adresseentreprise;
    }

    public function setAdresseentreprise(string $adresseentreprise): self
    {
        $this->adresseentreprise = $adresseentreprise;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getServicestage(): ?string
    {
        return $this->servicestage;
    }

    public function setServicestage(?string $servicestage): self
    {
        $this->servicestage = $servicestage;

        return $this;
    }

    public function getDirecteur(): ?string
    {
        return $this->directeur;
    }

    public function setDirecteur(?string $directeur): self
    {
        $this->directeur = $directeur;

        return $this;
    }

    public function getCodenaf(): ?string
    {
        return $this->codenaf;
    }

    public function setCodenaf(string $codenaf): self
    {
        $this->codenaf = $codenaf;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getTelentreprise(): ?string
    {
        return $this->telentreprise;
    }

    public function setTelentreprise(?string $telentreprise): self
    {
        $this->telentreprise = $telentreprise;

        return $this;
    }

    public function getFaxentreprise(): ?string
    {
        return $this->faxentreprise;
    }

    public function setFaxentreprise(?string $faxentreprise): self
    {
        $this->faxentreprise = $faxentreprise;

        return $this;
    }

    public function getMelentreprise(): ?string
    {
        return $this->melentreprise;
    }

    public function setMelentreprise(?string $melentreprise): self
    {
        $this->melentreprise = $melentreprise;

        return $this;
    }

    public function getAnneestage(): ?int
    {
        return $this->anneestage;
    }

    public function setAnneestage(?int $anneestage): self
    {
        $this->anneestage = $anneestage;

        return $this;
    }

    public function getAvis()
    {
        return $this->avis;
    }

    public function setAvis($avis): self
    {
        $this->avis = $avis;

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

    public function getDureestage(): ?int
    {
        return $this->dureestage;
    }

    public function setDureestage(?int $dureestage): self
    {
        $this->dureestage = $dureestage;

        return $this;
    }

    public function getHorlun(): ?string
    {
        return $this->horlun;
    }

    public function setHorlun(?string $horlun): self
    {
        $this->horlun = $horlun;

        return $this;
    }

    public function getHormar(): ?string
    {
        return $this->hormar;
    }

    public function setHormar(?string $hormar): self
    {
        $this->hormar = $hormar;

        return $this;
    }

    public function getHormer(): ?string
    {
        return $this->hormer;
    }

    public function setHormer(?string $hormer): self
    {
        $this->hormer = $hormer;

        return $this;
    }

    public function getHorjeu(): ?string
    {
        return $this->horjeu;
    }

    public function setHorjeu(?string $horjeu): self
    {
        $this->horjeu = $horjeu;

        return $this;
    }

    public function getHorven(): ?string
    {
        return $this->horven;
    }

    public function setHorven(?string $horven): self
    {
        $this->horven = $horven;

        return $this;
    }

    public function getHorsam(): ?string
    {
        return $this->horsam;
    }

    public function setHorsam(?string $horsam): self
    {
        $this->horsam = $horsam;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(?string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }
    
    //******************* Fonctions non générées ************************/
    public function __toString() {
    	return strval($this->id);
    }

	
	
	

}
