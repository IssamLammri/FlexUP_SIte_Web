<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupServicesProposal
 *
 * @ORM\Table(name="group_services_proposal", indexes={@ORM\Index(name="ID_Group", columns={"ID_Group"}), @ORM\Index(name="ID_File", columns={"ID_File"}), @ORM\Index(name="ID_Service", columns={"ID_Service"}), @ORM\Index(name="ID_Region", columns={"ID_Region"})})
 * @ORM\Entity
 */
class GroupServicesProposal
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
     * @var \DateTime
     *
     * @ORM\Column(name="Proposal_Date", type="date", nullable=false)
     */
    private $proposalDate;

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
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Group", referencedColumnName="ID_Group")
     * })
     */
    private $idGroup;

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

    public function getProposalDate(): ?\DateTimeInterface
    {
        return $this->proposalDate;
    }

    public function setProposalDate(\DateTimeInterface $proposalDate): self
    {
        $this->proposalDate = $proposalDate;

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

    public function getIdGroup(): ?Groups
    {
        return $this->idGroup;
    }

    public function setIdGroup(?Groups $idGroup): self
    {
        $this->idGroup = $idGroup;

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
