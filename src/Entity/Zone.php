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
    public function __toString()
    {
        $chaine = $this->getNameZone();
        return $chaine;

    }


}
