<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortGroupe
 *
 * @ORM\Table(name="port_groupe")
 * @ORM\Entity
 */
class PortGroupe
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
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=12, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="annee", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $annee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idParcours", type="smallint", nullable=true)
     */
    private $idparcours = '0';

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(?string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getIdparcours(): ?int
    {
        return $this->idparcours;
    }

    public function setIdparcours(?int $idparcours): self
    {
        $this->idparcours = $idparcours;

        return $this;
    }


}
