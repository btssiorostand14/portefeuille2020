<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortTypesource
 *
 * @ORM\Table(name="port_typesource")
 * @ORM\Entity
 */
class PortTypesource
{
    /**
     * @var int
     *
     * @ORM\Column(name="code", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=70, nullable=false)
     */
    private $libelle;

    public function getCode(): ?int
    {
        return $this->code;
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
