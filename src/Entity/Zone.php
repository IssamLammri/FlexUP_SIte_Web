<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone", indexes={@ORM\Index(name="Currency", columns={"Currency"}), @ORM\Index(name="ID_Parent", columns={"ID_Parent"})})
 * @ORM\Entity
 */
class Zone
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Zone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idZone;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Zone", type="string", length=100, nullable=false)
     */
    private $nameZone;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z0", type="string", length=10, nullable=true)
     */
    private $z0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z1", type="string", length=100, nullable=true)
     */
    private $z1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z2", type="string", length=100, nullable=true)
     */
    private $z2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z3", type="string", length=100, nullable=true)
     */
    private $z3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z4", type="string", length=100, nullable=true)
     */
    private $z4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Z5", type="string", length=100, nullable=true)
     */
    private $z5;

    /**
     * @var \Zone
     *
     * @ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Parent", referencedColumnName="ID_Zone")
     * })
     */
    private $idParent;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Currency", referencedColumnName="ID_Currency")
     * })
     */
    private $currency;

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    public function getNameZone(): ?string
    {
        return $this->nameZone;
    }

    public function setNameZone(string $nameZone): self
    {
        $this->nameZone = $nameZone;

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

    public function getZ0(): ?string
    {
        return $this->z0;
    }

    public function setZ0(?string $z0): self
    {
        $this->z0 = $z0;

        return $this;
    }

    public function getZ1(): ?string
    {
        return $this->z1;
    }

    public function setZ1(?string $z1): self
    {
        $this->z1 = $z1;

        return $this;
    }

    public function getZ2(): ?string
    {
        return $this->z2;
    }

    public function setZ2(?string $z2): self
    {
        $this->z2 = $z2;

        return $this;
    }

    public function getZ3(): ?string
    {
        return $this->z3;
    }

    public function setZ3(?string $z3): self
    {
        $this->z3 = $z3;

        return $this;
    }

    public function getZ4(): ?string
    {
        return $this->z4;
    }

    public function setZ4(?string $z4): self
    {
        $this->z4 = $z4;

        return $this;
    }

    public function getZ5(): ?string
    {
        return $this->z5;
    }

    public function setZ5(?string $z5): self
    {
        $this->z5 = $z5;

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

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }


}
