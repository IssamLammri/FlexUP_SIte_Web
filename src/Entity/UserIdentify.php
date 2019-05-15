<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserIdentify
 *
 * @ORM\Table(name="user_identify", indexes={@ORM\Index(name="ID_Type_Identify", columns={"ID_Type_Identify"}), @ORM\Index(name="ID_User", columns={"ID_User"})})
 * @ORM\Entity
 */
class UserIdentify
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
     * @ORM\Column(name="PID_Number", type="integer", nullable=false)
     */
    private $pidNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Of_issue", type="date", nullable=false)
     */
    private $dateOfIssue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Of_Expiration", type="date", nullable=false)
     */
    private $dateOfExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="Emission_Entity", type="string", length=100, nullable=false)
     */
    private $emissionEntity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Satuts", type="string", length=100, nullable=true)
     */
    private $satuts;

    /**
     * @var \TypeIdentifyDocument
     *
     * @ORM\ManyToOne(targetEntity="TypeIdentifyDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Type_Identify", referencedColumnName="ID_Type_Identify")
     * })
     */
    private $idTypeentify;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_User", referencedColumnName="ID_User")
     * })
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPidNumber(): ?int
    {
        return $this->pidNumber;
    }

    public function setPidNumber(int $pidNumber): self
    {
        $this->pidNumber = $pidNumber;

        return $this;
    }

    public function getDateOfIssue(): ?\DateTimeInterface
    {
        return $this->dateOfIssue;
    }

    public function setDateOfIssue(\DateTimeInterface $dateOfIssue): self
    {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    public function getDateOfExpiration(): ?\DateTimeInterface
    {
        return $this->dateOfExpiration;
    }

    public function setDateOfExpiration(\DateTimeInterface $dateOfExpiration): self
    {
        $this->dateOfExpiration = $dateOfExpiration;

        return $this;
    }

    public function getEmissionEntity(): ?string
    {
        return $this->emissionEntity;
    }

    public function setEmissionEntity(string $emissionEntity): self
    {
        $this->emissionEntity = $emissionEntity;

        return $this;
    }

    public function getSatuts(): ?string
    {
        return $this->satuts;
    }

    public function setSatuts(?string $satuts): self
    {
        $this->satuts = $satuts;

        return $this;
    }

    public function getIdTypeentify(): ?TypeIdentifyDocument
    {
        return $this->idTypeentify;
    }

    public function setIdTypeentify(?TypeIdentifyDocument $idTypeentify): self
    {
        $this->idTypeentify = $idTypeentify;

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


}
