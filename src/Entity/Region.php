<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="ID_Parent", columns={"ID_Parent"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Region", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Region", type="string", length=50, nullable=false)
     */
    private $nameRegion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Postal_Code", type="integer", nullable=true)
     */
    private $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Global_Code", type="string", length=50, nullable=true)
     */
    private $globalCode;

    /**
     * @var int
     *
     * @ORM\Column(name="Level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="Continent", type="string", length=100, nullable=false)
     */
    private $continent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pays", type="string", length=100, nullable=true)
     */
    private $pays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Region", type="string", length=100, nullable=true)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departement", type="string", length=100, nullable=true)
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commune", type="string", length=100, nullable=true)
     */
    private $commune;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Parent", referencedColumnName="ID_Region")
     * })
     */
    private $idParent;

    public function getIdRegion(): ?int
    {
        return $this->idRegion;
    }

    public function getNameRegion(): ?string
    {
        return $this->nameRegion;
    }

    public function setNameRegion(string $nameRegion): self
    {
        $this->nameRegion = $nameRegion;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(?int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getGlobalCode(): ?string
    {
        return $this->globalCode;
    }

    public function setGlobalCode(?string $globalCode): self
    {
        $this->globalCode = $globalCode;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(string $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getIdParent(): ?self
    {
        return $this->idParent;
    }

    public function setIdParent(?self $idParent): self
    {
        $this->idParent = $idParent;

        return $this;
    }


}
