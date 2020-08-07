<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortExerce
 *
 * @ORM\Table(name="port_exerce")
 * @ORM\Entity
 */
class PortExerce
{
    /**
     * @var int
     *
     * @ORM\Column(name="numProfesseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numprofesseur;

    /**
     * @var int
     *
     * @ORM\Column(name="numGroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgroupe;

    public function getNumprofesseur(): ?int
    {
        return $this->numprofesseur;
    }

    public function getNumgroupe(): ?int
    {
        return $this->numgroupe;
    }


}
