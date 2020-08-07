<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortActivitecitee
 *
 * @ORM\Table(name="port_activitecitee", indexes={@ORM\Index(name="iaccisitu", columns={"refSituation"})})
 * @ORM\Entity
 */
class PortActivitecitee
{
    /**
     * @var int
     *
     * @ORM\Column(name="idActivite", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idactivite;

    /**
     * @var int
     *
     * @ORM\Column(name="refSituation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refsituation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    public function getIdactivite(): ?int
    {
        return $this->idactivite;
    }

    public function getRefsituation(): ?int
    {
        return $this->refsituation;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }


}
