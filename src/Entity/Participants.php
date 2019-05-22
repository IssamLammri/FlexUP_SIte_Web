<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participants
 *
 * @ORM\Table(name="participants", indexes={@ORM\Index(name="ID_User", columns={"ID_User"}), @ORM\Index(name="ID_Group", columns={"ID_Group"})})
 * @ORM\Entity
 */
class Participants
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Participant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipant;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_User", referencedColumnName="ID_User")
     * })
     */
    private $idUser;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Group", referencedColumnName="ID_Group")
     * })
     */
    private $idGroup;

    public function getIdParticipant(): ?int
    {
        return $this->idParticipant;
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

    public function getIdUser(): ?Users
    {
        return $this->idUser;
    }

    public function setIdUser(?Users $idUser): self
    {
        $this->idUser = $idUser;

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
