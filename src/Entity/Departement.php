<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 3)]
    private ?string $code = null;

    #[ORM\OneToMany(mappedBy: 'departement', targetEntity: Ville::class)]
    private Collection $villes;

    #[ORM\OneToMany(mappedBy: 'departement', targetEntity: CartePostal::class)]
    private Collection $cartePostals;

    #[ORM\ManyToOne(inversedBy: 'departements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Region $region = null;

    public function __construct()
    {
        $this->villes = new ArrayCollection();
        $this->cartePostals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection<int, Ville>
     */
    public function getVilles(): Collection
    {
        return $this->villes;
    }

    public function addVille(Ville $ville): static
    {
        if (!$this->villes->contains($ville)) {
            $this->villes->add($ville);
            $ville->setDepartement($this);
        }

        return $this;
    }

    public function removeVille(Ville $ville): static
    {
        if ($this->villes->removeElement($ville)) {
            // set the owning side to null (unless already changed)
            if ($ville->getDepartement() === $this) {
                $ville->setDepartement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CartePostal>
     */
    public function getCartePostals(): Collection
    {
        return $this->cartePostals;
    }

    public function addCartePostal(CartePostal $cartePostal): static
    {
        if (!$this->cartePostals->contains($cartePostal)) {
            $this->cartePostals->add($cartePostal);
            $cartePostal->setDepartement($this);
        }

        return $this;
    }

    public function removeCartePostal(CartePostal $cartePostal): static
    {
        if ($this->cartePostals->removeElement($cartePostal)) {
            // set the owning side to null (unless already changed)
            if ($cartePostal->getDepartement() === $this) {
                $cartePostal->setDepartement(null);
            }
        }

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): static
    {
        $this->region = $region;

        return $this;
    }
}
