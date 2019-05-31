<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity
 */
class Offers
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Offers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffers;

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
     * @var \Service
     *@ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Service",referencedColumnName="ID_Service")
     * })
     */
    private $idService;

    /**
     * @var \Zone
     *@ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Zones",referencedColumnName="ID_Zone")
     * })
     */
    private $idZones;

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
     * @var int|null
     *
     * @ORM\Column(name="Target_Price", type="integer", nullable=true)
     */
    private $targetPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Minimum_Price", type="integer", nullable=true)
     */
    private $minimumPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Transport_Fixed", type="integer", nullable=true)
     */
    private $transportFixed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_Liv", type="string", length=50, nullable=true)
     */
    private $typeLiv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Offers", type="date", nullable=false)
     */
    private $dateOffers;

    public function getIdOffers(): ?int
    {
        return $this->idOffers;
    }

    public function getIdGroup(): ?Groups
    {
        return $this->idGroup;
    }

    public function setIdGroup(int $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService(int $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getIdZones(): ?Zone
    {
        return $this->idZones;
    }

    public function setIdZones(int $idZones): self
    {
        $this->idZones = $idZones;

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

    public function getTargetPrice(): ?int
    {
        return $this->targetPrice;
    }

    public function setTargetPrice(?int $targetPrice): self
    {
        $this->targetPrice = $targetPrice;

        return $this;
    }

    public function getMinimumPrice(): ?int
    {
        return $this->minimumPrice;
    }

    public function setMinimumPrice(?int $minimumPrice): self
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    public function getTransportFixed(): ?int
    {
        return $this->transportFixed;
    }

    public function setTransportFixed(?int $transportFixed): self
    {
        $this->transportFixed = $transportFixed;

        return $this;
    }

    public function getTypeLiv(): ?string
    {
        return $this->typeLiv;
    }

    public function setTypeLiv(?string $typeLiv): self
    {
        $this->typeLiv = $typeLiv;

        return $this;
    }

    public function getDateOffers(): ?\DateTimeInterface
    {
        return $this->dateOffers;
    }

    public function setDateOffers(\DateTimeInterface $dateOffers): self
    {
        $this->dateOffers = $dateOffers;

        return $this;
    }


}
