<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfferedPrices
 *
 * @ORM\Table(name="offered_prices", indexes={@ORM\Index(name="ID_Zone", columns={"ID_Zone"}), @ORM\Index(name="ID_Service", columns={"ID_Service"})})
 * @ORM\Entity
 */
class OfferedPrices
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Offers_Price", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffersPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="Price_Service", type="integer", nullable=false)
     */
    private $priceService;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Offer", type="date", nullable=false)
     */
    private $dateOffer;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Service", referencedColumnName="ID_Service")
     * })
     */
    private $idService;

    /**
     * @var \Zone
     *
     * @ORM\ManyToOne(targetEntity="Zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Zone", referencedColumnName="ID_Zone")
     * })
     */
    private $idZone;

    public function getIdOffersPrice(): ?int
    {
        return $this->idOffersPrice;
    }

    public function getPriceService(): ?int
    {
        return $this->priceService;
    }

    public function setPriceService(int $priceService): self
    {
        $this->priceService = $priceService;

        return $this;
    }

    public function getDateOffer(): ?\DateTimeInterface
    {
        return $this->dateOffer;
    }

    public function setDateOffer(\DateTimeInterface $dateOffer): self
    {
        $this->dateOffer = $dateOffer;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService(?Service $idService): self
    {
        $this->idService = $idService;

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


}
