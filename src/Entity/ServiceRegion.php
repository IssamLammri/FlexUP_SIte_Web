<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceRegion
 *
 * @ORM\Table(name="service_region", indexes={@ORM\Index(name="ID_Region", columns={"ID_Region"}), @ORM\Index(name="ID_Service", columns={"ID_Service"}), @ORM\Index(name="ID_File", columns={"ID_File"})})
 * @ORM\Entity
 */
class ServiceRegion
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Price_Service", type="integer", nullable=false)
     */
    private $priceService;

    /**
     * @var \FileProposalGroup
     *
     * @ORM\ManyToOne(targetEntity="FileProposalGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_File", referencedColumnName="ID_File_Proposal")
     * })
     */
    private $idFile;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Region", referencedColumnName="ID_Region")
     * })
     */
    private $idRegion;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Service", referencedColumnName="ID_Service")
     * })
     */
    private $idService;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdFile(): ?FileProposalGroup
    {
        return $this->idFile;
    }

    public function setIdFile(?FileProposalGroup $idFile): self
    {
        $this->idFile = $idFile;

        return $this;
    }

    public function getIdRegion(): ?Region
    {
        return $this->idRegion;
    }

    public function setIdRegion(?Region $idRegion): self
    {
        $this->idRegion = $idRegion;

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


}
