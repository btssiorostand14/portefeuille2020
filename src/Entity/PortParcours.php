<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortParcours
 *
 * @ORM\Table(name="port_parcours")
 * @ORM\Entity
 */
class PortParcours
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
     * @var string
     *
     * @ORM\Column(name="nomenclature", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $nomenclature;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
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
