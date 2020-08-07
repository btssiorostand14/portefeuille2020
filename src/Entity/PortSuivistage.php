<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortSuivistage
 *
 * @ORM\Table(name="port_suivistage", indexes={@ORM\Index(name="idProf_2", columns={"idProf", "idEtud", "annee"}), @ORM\Index(name="idProf", columns={"idProf", "idEtud"}), @ORM\Index(name="idEtud", columns={"idEtud"}), @ORM\Index(name="IDX_D197645428472E25", columns={"idProf"})})
 * @ORM\Entity
 */
class PortSuivistage
{
    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $annee;

    /**
     * @var \PortProfesseur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PortProfesseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProf", referencedColumnName="num")
     * })
     */
    private $idprof;

    /**
     * @var \PortEtudiant
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PortEtudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtud", referencedColumnName="num")
     * })
     */
    private $idetud;

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function getIdprof(): ?PortProfesseur
    {
        return $this->idprof;
    }

    public function setIdprof(?PortProfesseur $idprof): self
    {
        $this->idprof = $idprof;

        return $this;
    }

    public function getIdetud(): ?PortEtudiant
    {
        return $this->idetud;
    }

    public function setIdetud(?PortEtudiant $idetud): self
    {
        $this->idetud = $idetud;

        return $this;
    }


}
