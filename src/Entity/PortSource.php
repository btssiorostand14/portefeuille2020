<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortSource
 *
 * @ORM\Table(name="port_source")
 * @ORM\Entity
 */
class PortSource
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
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codeTypesource", type="smallint", nullable=true)
     */
    private $codetypesource;

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

    public function getCodetypesource(): ?int
    {
        return $this->codetypesource;
    }

    public function setCodetypesource(?int $codetypesource): self
    {
        $this->codetypesource = $codetypesource;

        return $this;
    }


}
