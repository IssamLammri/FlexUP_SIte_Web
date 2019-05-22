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
     * @var int
     *
     * @ORM\Column(name="ID_Group", type="integer", nullable=false)
     */
    private $idGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Service", type="integer", nullable=false)
     */
    private $idService;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Zones", type="integer", nullable=false)
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

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function setIdGroup(int $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setIdService(int $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getIdZones(): ?int
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
