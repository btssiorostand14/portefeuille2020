<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortSemainecarnet
 *
 * @ORM\Table(name="port_semainecarnet", indexes={@ORM\Index(name="idCarnet", columns={"idCarnet"})})
 * @ORM\Entity
 */
class PortSemainecarnet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numSemaine", type="integer", nullable=false)
     */
    private $numsemaine;

    /**
     * @var string
     *
     * @ORM\Column(name="apprentissage", type="string", length=255, nullable=false)
     */
    private $apprentissage;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="string", length=255, nullable=false)
     */
    private $bilan;

    /**
     * @var \PortCarnetbord
     *
     * @ORM\ManyToOne(targetEntity="PortCarnetbord")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCarnet", referencedColumnName="id")
     * })
     */
    private $idcarnet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumsemaine(): ?int
    {
        return $this->numsemaine;
    }

    public function setNumsemaine(int $numsemaine): self
    {
        $this->numsemaine = $numsemaine;

        return $this;
    }

    public function getApprentissage(): ?string
    {
        return $this->apprentissage;
    }

    public function setApprentissage(string $apprentissage): self
    {
        $this->apprentissage = $apprentissage;

        return $this;
    }

    public function getBilan(): ?string
    {
        return $this->bilan;
    }

    public function setBilan(string $bilan): self
    {
        $this->bilan = $bilan;

        return $this;
    }

    public function getIdcarnet(): ?PortCarnetbord
    {
        return $this->idcarnet;
    }

    public function setIdcarnet(?PortCarnetbord $idcarnet): self
    {
        $this->idcarnet = $idcarnet;

        return $this;
    }


}
