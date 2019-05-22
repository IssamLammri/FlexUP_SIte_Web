<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupZone
 *
 * @ORM\Table(name="group_zone", indexes={@ORM\Index(name="ID_Region", columns={"ID_Zone"}), @ORM\Index(name="ID_Group", columns={"ID_Group"})})
 * @ORM\Entity
 */
class GroupZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Group_Zone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupZone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Zone
     *
     * @ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Zone", referencedColumnName="ID_Zone")
     * })
     */
    private $idZone;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Group", referencedColumnName="ID_Group")
     * })
     */
    private $idGroup;

    public function getIdGroupZone(): ?int
    {
        return $this->idGroupZone;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdZone(): ?Zone
    {
        return $this->idZone;
    }

    public function setIdZone(?Zone $idZone): self
    {
        $this->idZone = $idZone;

        return $this;
    }

    public function getIdGroup(): ?Groups
    {
        return $this->idGroup;
    }

    public function setIdGroup(?Groups $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }


}
