<?php

namespace App\Entity;

use App\Repository\InfosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfosRepository::class)
 */
class Infos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $metier;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lieuDeTravail;

    /**
     * @ORM\Column(type="string", length=10000, nullable=true)
     */
    private $parcoursProf;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $parcoursScolaire;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $marie;

    public function __construct()
    {
        // $this->isVerified = false;
        $this->registerAt = new \DateTimeImmutable('now');
        // $this->roles = ['ROLE_USER'];
        // $this-> accountMustBeverifiedBefore = (new \DateTimeImmutable('now'))->add(new \DateInterval("P1D"));
    }


    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $registerAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="infos")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;


    public function __toString()
    {
        return $this->nom;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->lieuDeNaissance;
    }

    public function setLieuDeNaissance(string $lieuDeNaissance): self
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(?string $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    public function getLieuDeTravail(): ?string
    {
        return $this->lieuDeTravail;
    }

    public function setLieuDeTravail(?string $lieuDeTravail): self
    {
        $this->lieuDeTravail = $lieuDeTravail;

        return $this;
    }

    public function getParcoursProf(): ?string
    {
        return $this->parcoursProf;
    }

    public function setParcoursProf(?string $parcoursProf): self
    {
        $this->parcoursProf = $parcoursProf;

        return $this;
    }

    public function getParcoursScolaire(): ?string
    {
        return $this->parcoursScolaire;
    }

    public function setParcoursScolaire(?string $parcoursScolaire): self
    {
        $this->parcoursScolaire = $parcoursScolaire;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getMarie(): ?string
    {
        return $this->marie;
    }

    public function setMarie(string $marie): self
    {
        $this->marie = $marie;

        return $this;
    }
  

    public function getRegisterAt(): \DateTimeImmutable
    {
        return $this->registerAt;
    }

    public function setRegisterAt(\DateTimeImmutable $registerAt): self
    {
        $this->registerAt = $registerAt;

        return $this;
    }

    public function getUserId(): User
    {
        return $this->user;
    }

    public function setUserId(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
