<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addresses
 *
 * @ORM\Table(name="addresses", indexes={@ORM\Index(name="ID_User", columns={"ID_User"}), @ORM\Index(name="ID_Group", columns={"ID_Group"})})
 * @ORM\Entity
 */
class Addresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Address", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="Is_Group", type="boolean", nullable=false)
     */
    private $isGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="Address_Label", type="string", length=100, nullable=false)
     */
    private $addressLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Contact_Name", type="string", length=100, nullable=true)
     */
    private $contactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Organisation_Name", type="string", length=100, nullable=true)
     */
    private $organisationName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Department_Name", type="string", length=100, nullable=true)
     */
    private $departmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="Address_1", type="string", length=255, nullable=false)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address_2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="Post_Code", type="integer", nullable=false)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=100, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=100, nullable=false)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Access_Details", type="string", length=255, nullable=true)
     */
    private $accessDetails;

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

    public function getIdAddress(): ?int
    {
        return $this->idAddress;
    }

    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    public function setIsGroup(bool $isGroup): self
    {
        $this->isGroup = $isGroup;

        return $this;
    }

    public function getAddressLabel(): ?string
    {
        return $this->addressLabel;
    }

    public function setAddressLabel(string $addressLabel): self
    {
        $this->addressLabel = $addressLabel;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }

    public function setOrganisationName(?string $organisationName): self
    {
        $this->organisationName = $organisationName;

        return $this;
    }

    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    public function setDepartmentName(?string $departmentName): self
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostCode(): ?int
    {
        return $this->postCode;
    }

    public function setPostCode(int $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getAccessDetails(): ?string
    {
        return $this->accessDetails;
    }

    public function setAccessDetails(?string $accessDetails): self
    {
        $this->accessDetails = $accessDetails;

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
