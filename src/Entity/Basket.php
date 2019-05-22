<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table(name="basket", indexes={@ORM\Index(name="ID_Group", columns={"ID_Group"}), @ORM\Index(name="ID_User", columns={"ID_User"}), @ORM\Index(name="ID_Address", columns={"ID_Address"})})
 * @ORM\Entity
 */
class Basket
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Basket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBasket;

    /**
     * @var bool
     *
     * @ORM\Column(name="Is_Group", type="boolean", nullable=false)
     */
    private $isGroup;

    /**
     * @var bool
     *
     * @ORM\Column(name="Is_Paid", type="boolean", nullable=false)
     */
    private $isPaid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Customer", type="string", length=50, nullable=true)
     */
    private $nameCustomer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Total_Price", type="integer", nullable=true)
     */
    private $totalPrice;

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

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Address", referencedColumnName="ID_Address")
     * })
     */
    private $idAddress;

    public function getIdBasket(): ?int
    {
        return $this->idBasket;
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

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(bool $isPaid): self
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getNameCustomer(): ?string
    {
        return $this->nameCustomer;
    }

    public function setNameCustomer(?string $nameCustomer): self
    {
        $this->nameCustomer = $nameCustomer;

        return $this;
    }

    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

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

    public function getIdAddress(): ?Addresses
    {
        return $this->idAddress;
    }

    public function setIdAddress(?Addresses $idAddress): self
    {
        $this->idAddress = $idAddress;

        return $this;
    }


}
