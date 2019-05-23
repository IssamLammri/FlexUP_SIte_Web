<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="ID_Registered_Address", columns={"ID_Registered_Address"}), @ORM\Index(name="ID_Manager", columns={"ID_Manager"}), @ORM\Index(name="ID_Main_Address", columns={"ID_Main_Address"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Star", type="integer", nullable=true)
     */
    private $star;

    /**
     * @var string
     *
     * @ORM\Column(name="Group_Name", type="string", length=100, nullable=false)
     */
    private $groupName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Is_Flexible", type="boolean", nullable=true)
     */
    private $isFlexible;

    /**
     * @var bool
     *
     * @ORM\Column(name="Is_Registered", type="boolean", nullable=false)
     */
    private $isRegistered;

    /**
     * @var string
     *
     * @ORM\Column(name="Registration_Name", type="string", length=100, nullable=false)
     */
    private $registrationName;

    /**
     * @var int
     *
     * @ORM\Column(name="Registration_Number", type="integer", nullable=false)
     */
    private $registrationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Registration_Country", type="string", length=100, nullable=false)
     */
    private $registrationCountry;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Manager", referencedColumnName="ID_User")
     * })
     */
    private $idManager;

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Main_Address", referencedColumnName="ID_Address")
     * })
     */
    private $idMainAddress;

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Registered_Address", referencedColumnName="ID_Address")
     * })
     */
    private $idRegisteredAddress;

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getStar(): ?int
    {
        return $this->star;
    }

    public function setStar(?int $star): self
    {
        $this->star = $star;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getIsFlexible(): ?bool
    {
        return $this->isFlexible;
    }

    public function setIsFlexible(?bool $isFlexible): self
    {
        $this->isFlexible = $isFlexible;

        return $this;
    }

    public function getIsRegistered(): ?bool
    {
        return $this->isRegistered;
    }

    public function setIsRegistered(bool $isRegistered): self
    {
        $this->isRegistered = $isRegistered;

        return $this;
    }

    public function getRegistrationName(): ?string
    {
        return $this->registrationName;
    }

    public function setRegistrationName(string $registrationName): self
    {
        $this->registrationName = $registrationName;

        return $this;
    }

    public function getRegistrationNumber(): ?int
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber(int $registrationNumber): self
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    public function getRegistrationCountry(): ?string
    {
        return $this->registrationCountry;
    }

    public function setRegistrationCountry(string $registrationCountry): self
    {
        $this->registrationCountry = $registrationCountry;

        return $this;
    }

    public function getIdManager(): ?Users
    {
        return $this->idManager;
    }

    public function setIdManager(?Users $idManager): self
    {
        $this->idManager = $idManager;

        return $this;
    }

    public function getIdMainAddress(): ?Addresses
    {
        return $this->idMainAddress;
    }

    public function setIdMainAddress(?Addresses $idMainAddress): self
    {
        $this->idMainAddress = $idMainAddress;

        return $this;
    }

    public function getIdRegisteredAddress(): ?Addresses
    {
        return $this->idRegisteredAddress;
    }

    public function setIdRegisteredAddress(?Addresses $idRegisteredAddress): self
    {
        $this->idRegisteredAddress = $idRegisteredAddress;

        return $this;
    }
    public function __toString()
    {
        return $this->groupName;
    }


}
