<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortProduction
 *
 * @ORM\Table(name="port_production")
 * @ORM\Entity
 */
class PortProduction
{
    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="refSituation", type="integer", nullable=false)
     */
    private $refsituation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getRefsituation(): ?int
    {
        return $this->refsituation;
    }

    public function setRefsituation(int $refsituation): self
    {
        $this->refsituation = $refsituation;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
