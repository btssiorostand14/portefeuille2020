<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortNotifier
 *
 * @ORM\Table(name="port_notifier", indexes={@ORM\Index(name="numEtudiant", columns={"numEtudiant"})})
 * @ORM\Entity
 */
class PortNotifier
{
    /**
     * @var int
     *
     * @ORM\Column(name="numNotification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numnotification;

    /**
     * @var int
     *
     * @ORM\Column(name="numEtudiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numetudiant;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    public function getNumnotification(): ?int
    {
        return $this->numnotification;
    }

    public function getNumetudiant(): ?int
    {
        return $this->numetudiant;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
