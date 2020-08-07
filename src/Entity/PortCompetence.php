<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortCompetence
 *
 * @ORM\Table(name="port_competence")
 * @ORM\Entity
 */
class PortCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idActivite", type="smallint", nullable=false)
     */
    private $idactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nomenclature", type="string", length=9, nullable=false, options={"fixed"=true})
     */
    private $nomenclature;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=210, nullable=false)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdactivite(): ?int
    {
        return $this->idactivite;
    }

    public function setIdactivite(int $idactivite): self
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    public function getNomenclature(): ?string
    {
        return $this->nomenclature;
    }

    public function setNomenclature(string $nomenclature): self
    {
        $this->nomenclature = $nomenclature;

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


}
