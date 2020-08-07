<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortJour
 *
 * @ORM\Table(name="port_jour")
 * @ORM\Entity
 */
class PortJour
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=8, nullable=false)
     */
    private $libelle;

    public function getCode(): ?string
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
