<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortCommentaire
 *
 * @ORM\Table(name="port_commentaire", indexes={@ORM\Index(name="icommsitu", columns={"refSituation"})})
 * @ORM\Entity
 */
class PortCommentaire
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
     * @var int|null
     *
     * @ORM\Column(name="refSituation", type="integer", nullable=true)
     */
    private $refsituation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numProfesseur", type="integer", nullable=true)
     */
    private $numprofesseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecommentaire", type="date", nullable=true)
     */
    private $datecommentaire;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getRefsituation(): ?int
    {
        return $this->refsituation;
    }

    public function setRefsituation(?int $refsituation): self
    {
        $this->refsituation = $refsituation;

        return $this;
    }

    public function getNumprofesseur(): ?int
    {
        return $this->numprofesseur;
    }

    public function setNumprofesseur(?int $numprofesseur): self
    {
        $this->numprofesseur = $numprofesseur;

        return $this;
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

    public function getDatecommentaire(): ?\DateTimeInterface
    {
        return $this->datecommentaire;
    }

    public function setDatecommentaire(?\DateTimeInterface $datecommentaire): self
    {
        $this->datecommentaire = $datecommentaire;

        return $this;
    }


}
