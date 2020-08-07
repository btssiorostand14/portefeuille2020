<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortActivite
 *
 * @ORM\Table(name="port_activite")
 * @ORM\Entity
 */
class PortActivite
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
     * @ORM\Column(name="idDomaine", type="smallint", nullable=false)
     */
    private $iddomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="nomenclature", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $nomenclature;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIddomaine(): ?int
    {
        return $this->iddomaine;
    }

    public function setIddomaine(int $iddomaine): self
    {
        $this->iddomaine = $iddomaine;

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
