<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortBac
 *
 * @ORM\Table(name="port_bac", uniqueConstraints={@ORM\UniqueConstraint(name="BAC_PK", columns={"id"})})
 * @ORM\Entity
 */
class PortBac
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellebac", type="string", length=40, nullable=true)
     */
    private $libellebac;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLibellebac(): ?string
    {
        return $this->libellebac;
    }

    public function setLibellebac(?string $libellebac): self
    {
        $this->libellebac = $libellebac;

        return $this;
    }


}
