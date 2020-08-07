<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortTachesemaine
 *
 * @ORM\Table(name="port_tachesemaine", indexes={@ORM\Index(name="idDomaine", columns={"idDomaine"}), @ORM\Index(name="idSemaine", columns={"idSemaine"}), @ORM\Index(name="jour", columns={"jour"})})
 * @ORM\Entity
 */
class PortTachesemaine
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
     * @ORM\Column(name="idSemaine", type="integer", nullable=false)
     */
    private $idsemaine;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=3, nullable=false)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="idDomaine", type="string", length=3, nullable=false)
     */
    private $iddomaine;

    /**
     * @var float
     *
     * @ORM\Column(name="duree", type="float", precision=10, scale=0, nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdsemaine(): ?int
    {
        return $this->idsemaine;
    }

    public function setIdsemaine(int $idsemaine): self
    {
        $this->idsemaine = $idsemaine;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    public function getIddomaine(): ?string
    {
        return $this->iddomaine;
    }

    public function setIddomaine(string $iddomaine): self
    {
        $this->iddomaine = $iddomaine;

        return $this;
    }

    public function getDuree(): ?float
    {
        return $this->duree;
    }

    public function setDuree(float $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
