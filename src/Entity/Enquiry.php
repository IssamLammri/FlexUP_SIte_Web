<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enquiry
 *
 * @ORM\Table(name="enquiry", indexes={@ORM\Index(name="ID_Group_Purchased", columns={"ID_Group_Purchased"}), @ORM\Index(name="ID_Basket", columns={"ID_Basket"}), @ORM\Index(name="ID_User", columns={"ID_User"}), @ORM\Index(name="ID_Groupe_V", columns={"ID_Group_V"}), @ORM\Index(name="ID_Offers_Price", columns={"ID_Offers_Price"})})
 * @ORM\Entity
 */
class Enquiry
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Order", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Client", type="string", length=50, nullable=true)
     */
    private $nameClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Service", type="string", length=50, nullable=true)
     */
    private $nameService;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Zone", type="string", length=100, nullable=true)
     */
    private $nameZone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Order_Date", type="date", nullable=false)
     */
    private $orderDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Delivery", type="string", length=50, nullable=true)
     */
    private $delivery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgency", type="string", length=50, nullable=true)
     */
    private $urgency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Experience", type="string", length=50, nullable=true)
     */
    private $experience;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit", type="string", length=10, nullable=true)
     */
    private $unit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Currency", type="string", length=20, nullable=true)
     */
    private $currency;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="Is_Group", type="boolean", nullable=false)
     */
    private $isGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Group", type="string", length=50, nullable=true)
     */
    private $nameGroup;

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
     *   @ORM\JoinColumn(name="ID_Group_Purchased", referencedColumnName="ID_Group")
     * })
     */
    private $idGroupPurchased;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Group_V", referencedColumnName="ID_Group")
     * })
     */
    private $idGroupV;

    /**
     * @var \Basket
     *
     * @ORM\ManyToOne(targetEntity="Basket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Basket", referencedColumnName="ID_Basket")
     * })
     */
    private $idBasket;

    /**
     * @var \OfferedPrices
     *
     * @ORM\ManyToOne(targetEntity="OfferedPrices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Offers_Price", referencedColumnName="ID_Offers_Price")
     * })
     */
    private $idOffersPrice;

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function getNameClient(): ?string
    {
        return $this->nameClient;
    }

    public function setNameClient(?string $nameClient): self
    {
        $this->nameClient = $nameClient;

        return $this;
    }

    public function getNameService(): ?string
    {
        return $this->nameService;
    }

    public function setNameService(?string $nameService): self
    {
        $this->nameService = $nameService;

        return $this;
    }

    public function getNameZone(): ?string
    {
        return $this->nameZone;
    }

    public function setNameZone(?string $nameZone): self
    {
        $this->nameZone = $nameZone;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(\DateTimeInterface $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getDelivery(): ?string
    {
        return $this->delivery;
    }

    public function setDelivery(?string $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getUrgency(): ?string
    {
        return $this->urgency;
    }

    public function setUrgency(?string $urgency): self
    {
        $this->urgency = $urgency;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
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

    public function getNameGroup(): ?string
    {
        return $this->nameGroup;
    }

    public function setNameGroup(?string $nameGroup): self
    {
        $this->nameGroup = $nameGroup;

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

    public function getIdGroupPurchased(): ?Groups
    {
        return $this->idGroupPurchased;
    }

    public function setIdGroupPurchased(?Groups $idGroupPurchased): self
    {
        $this->idGroupPurchased = $idGroupPurchased;

        return $this;
    }

    public function getIdGroupV(): ?Groups
    {
        return $this->idGroupV;
    }

    public function setIdGroupV(?Groups $idGroupV): self
    {
        $this->idGroupV = $idGroupV;

        return $this;
    }

    public function getIdBasket(): ?Basket
    {
        return $this->idBasket;
    }

    public function setIdBasket(?Basket $idBasket): self
    {
        $this->idBasket = $idBasket;

        return $this;
    }

    public function getIdOffersPrice(): ?OfferedPrices
    {
        return $this->idOffersPrice;
    }

    public function setIdOffersPrice(?OfferedPrices $idOffersPrice): self
    {
        $this->idOffersPrice = $idOffersPrice;

        return $this;
    }
    public function __toString()
    {
        $chaine = (string)$this->getIdOffersPrice();
        return $chaine;

    }


}
