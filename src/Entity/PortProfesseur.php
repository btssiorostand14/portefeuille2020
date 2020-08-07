<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortProfesseur
 *
 * @ORM\Table(name="port_professeur")
 * @ORM\Entity
 */
class PortProfesseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mel", type="string", length=64, nullable=false, options={"fixed"=true})
     */
    private $mel;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $mdp;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valide", type="string", length=1, nullable=true, options={"default"="O","fixed"=true})
     */
    private $valide = 'O';

    /**
     * @var string|null
     *
     * @ORM\Column(name="matiere", type="string", length=3, nullable=true)
     */
    private $matiere;

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMel(): ?string
    {
        return $this->mel;
    }

    public function setMel(string $mel): self
    {
        $this->mel = $mel;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getValide(): ?string
    {
        return $this->valide;
    }

    public function setValide(?string $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(?string $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }


}
