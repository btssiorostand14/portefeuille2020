<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortEchange
 *
 * @ORM\Table(name="port_echange")
 * @ORM\Entity
 */
class PortEchange
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
     * @ORM\Column(name="carnet", type="integer", nullable=false)
     */
    private $carnet;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=400, nullable=false)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemsg", type="date", nullable=false)
     */
    private $datemsg;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=10, nullable=false)
     */
    private $auteur;

    /**
     * @var bool
     *
     * @ORM\Column(name="lu", type="boolean", nullable=false)
     */
    private $lu;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getCarnet(): ?int
    {
        return $this->carnet;
    }

    public function setCarnet(int $carnet): self
    {
        $this->carnet = $carnet;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDatemsg(): ?\DateTimeInterface
    {
        return $this->datemsg;
    }

    public function setDatemsg(\DateTimeInterface $datemsg): self
    {
        $this->datemsg = $datemsg;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getLu(): ?bool
    {
        return $this->lu;
    }

    public function setLu(bool $lu): self
    {
        $this->lu = $lu;

        return $this;
    }


}
