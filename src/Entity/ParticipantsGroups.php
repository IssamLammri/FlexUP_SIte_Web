<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantsGroups
 *
 * @ORM\Table(name="participants_groups", indexes={@ORM\Index(name="ID_Participant_Group", columns={"ID_Participant_Group"}), @ORM\Index(name="ID_Origin_Group", columns={"ID_Origin_Group"})})
 * @ORM\Entity
 */
class ParticipantsGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Participant_Group", type="integer", nullable=false)
     */
    private $idParticipantGroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Investment_Date", type="date", nullable=false)
     */
    private $investmentDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Leaves", type="date", nullable=true)
     */
    private $dateLeaves;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Origin_Group", referencedColumnName="ID_Group")
     * })
     */
    private $idOriginGroup;

    /**
     * @var \Groups
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Participant_G", referencedColumnName="ID_Group")
     * })
     */
    private $idParticipantG;

    public function getIdParticipantGroup(): ?int
    {
        return $this->idParticipantGroup;
    }

    public function setIdParticipantGroup(int $idParticipantGroup): self
    {
        $this->idParticipantGroup = $idParticipantGroup;

        return $this;
    }

    public function getInvestmentDate(): ?\DateTimeInterface
    {
        return $this->investmentDate;
    }

    public function setInvestmentDate(\DateTimeInterface $investmentDate): self
    {
        $this->investmentDate = $investmentDate;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDateLeaves(): ?\DateTimeInterface
    {
        return $this->dateLeaves;
    }

    public function setDateLeaves(?\DateTimeInterface $dateLeaves): self
    {
        $this->dateLeaves = $dateLeaves;

        return $this;
    }

    public function getIdOriginGroup(): ?Groups
    {
        return $this->idOriginGroup;
    }

    public function setIdOriginGroup(?Groups $idOriginGroup): self
    {
        $this->idOriginGroup = $idOriginGroup;

        return $this;
    }

    public function getIdParticipantG(): ?Groups
    {
        return $this->idParticipantG;
    }

    public function setIdParticipantG(?Groups $idParticipantG): self
    {
        $this->idParticipantG = $idParticipantG;

        return $this;
    }


}
