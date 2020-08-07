<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortDomainetaches
 *
 * @ORM\Table(name="port_domainetaches")
 * @ORM\Entity
 */
class PortDomainetaches
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=40, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="idParcours", type="smallint", nullable=false)
     */
    private $idparcours;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getIdparcours(): ?int
    {
        return $this->idparcours;
    }

    public function setIdparcours(int $idparcours): self
    {
        $this->idparcours = $idparcours;

        return $this;
    }


}
