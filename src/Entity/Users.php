<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="PID_Type", columns={"PID_Type"}), @ORM\Index(name="ID_Main_Address", columns={"ID_Main_Address"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Email_Confirmed", type="boolean", nullable=true)
     */
    private $emailConfirmed;

    /**
     * @var string
     *
     * @ORM\Column(name="Mobile", type="string", length=50, nullable=false)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="First_Name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_Name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="User_Name", type="string", length=100, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Is_Pro", type="boolean", nullable=true)
     */
    private $isPro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PID_Number", type="string", length=50, nullable=true)
     */
    private $pidNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PID_Expiration_Date", type="date", nullable=true)
     */
    private $pidExpirationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PID_Emission_Entity", type="string", length=100, nullable=true)
     */
    private $pidEmissionEntity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="S_S_N", type="integer", nullable=true)
     */
    private $sSN;

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
     * @var \TypeIdentifyDocument
     *
     * @ORM\ManyToOne(targetEntity="TypeIdentifyDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PID_Type", referencedColumnName="ID_Type_Identify")
     * })
     */
    private $pidType;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmailConfirmed(): ?bool
    {
        return $this->emailConfirmed;
    }

    public function setEmailConfirmed(?bool $emailConfirmed): self
    {
        $this->emailConfirmed = $emailConfirmed;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIsPro(): ?bool
    {
        return $this->isPro;
    }

    public function setIsPro(?bool $isPro): self
    {
        $this->isPro = $isPro;

        return $this;
    }

    public function getPidNumber(): ?string
    {
        return $this->pidNumber;
    }

    public function setPidNumber(?string $pidNumber): self
    {
        $this->pidNumber = $pidNumber;

        return $this;
    }

    public function getPidExpirationDate(): ?\DateTimeInterface
    {
        return $this->pidExpirationDate;
    }

    public function setPidExpirationDate(?\DateTimeInterface $pidExpirationDate): self
    {
        $this->pidExpirationDate = $pidExpirationDate;

        return $this;
    }

    public function getPidEmissionEntity(): ?string
    {
        return $this->pidEmissionEntity;
    }

    public function setPidEmissionEntity(?string $pidEmissionEntity): self
    {
        $this->pidEmissionEntity = $pidEmissionEntity;

        return $this;
    }

    public function getSSN(): ?int
    {
        return $this->sSN;
    }

    public function setSSN(?int $sSN): self
    {
        $this->sSN = $sSN;

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

    public function getPidType(): ?TypeIdentifyDocument
    {
        return $this->pidType;
    }

    public function setPidType(?TypeIdentifyDocument $pidType): self
    {
        $this->pidType = $pidType;

        return $this;
    }


}
