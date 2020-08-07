<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortPointage
 *
 * @ORM\Table(name="port_pointage")
 * @ORM\Entity
 */
class PortPointage
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
     * @ORM\Column(name="idcdb", type="integer", nullable=false)
     */
    private $idcdb;

    /**
     * @var int
     *
     * @ORM\Column(name="idsemaine", type="integer", nullable=false)
     */
    private $idsemaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepoint", type="date", nullable=false)
     */
    private $datepoint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heurepoint", type="time", nullable=false)
     */
    private $heurepoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcdb(): ?int
    {
        return $this->idcdb;
    }

    public function setIdcdb(int $idcdb): self
    {
        $this->idcdb = $idcdb;

        return $this;
    }

    public function getIdsemaine(): ?int
    {
        return $this->idsemaine;
    }

    public function setIdsemaine(int $idsemaine): self
    {
        $this->idsemaine = $idsemaine;

        return $this;
    }

    public function getDatepoint(): ?\DateTimeInterface
    {
        return $this->datepoint;
    }

    public function setDatepoint(\DateTimeInterface $datepoint): self
    {
        $this->datepoint = $datepoint;

        return $this;
    }

    public function getHeurepoint(): ?\DateTimeInterface
    {
        return $this->heurepoint;
    }

    public function setHeurepoint(\DateTimeInterface $heurepoint): self
    {
        $this->heurepoint = $heurepoint;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }


}
