<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileProposalGroup
 *
 * @ORM\Table(name="file_proposal_group", indexes={@ORM\Index(name="ID_Type_File", columns={"ID_Type_File"})})
 * @ORM\Entity
 */
class FileProposalGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_File_Proposal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFileProposal;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_File", type="string", length=50, nullable=false)
     */
    private $nameFile;

    /**
     * @var int
     *
     * @ORM\Column(name="Number_Form", type="integer", nullable=false)
     */
    private $numberForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Category", type="string", length=50, nullable=true)
     */
    private $nameCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="Editor", type="string", length=50, nullable=false)
     */
    private $editor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Hourly_Price", type="integer", nullable=true)
     */
    private $hourlyPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Price_Unit", type="integer", nullable=true)
     */
    private $priceUnit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Price_M2", type="integer", nullable=true)
     */
    private $priceM2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Number_M2_Per_H", type="integer", nullable=true)
     */
    private $numberM2PerH;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Price_Min", type="integer", nullable=true)
     */
    private $priceMin;

    /**
     * @var \FormType
     *
     * @ORM\ManyToOne(targetEntity="FormType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Type_File", referencedColumnName="ID_Form_Type")
     * })
     */
    private $idTypeFile;

    public function getIdFileProposal(): ?int
    {
        return $this->idFileProposal;
    }

    public function getNameFile(): ?string
    {
        return $this->nameFile;
    }

    public function setNameFile(string $nameFile): self
    {
        $this->nameFile = $nameFile;

        return $this;
    }

    public function getNumberForm(): ?int
    {
        return $this->numberForm;
    }

    public function setNumberForm(int $numberForm): self
    {
        $this->numberForm = $numberForm;

        return $this;
    }

    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    public function setNameCategory(?string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getHourlyPrice(): ?int
    {
        return $this->hourlyPrice;
    }

    public function setHourlyPrice(?int $hourlyPrice): self
    {
        $this->hourlyPrice = $hourlyPrice;

        return $this;
    }

    public function getPriceUnit(): ?int
    {
        return $this->priceUnit;
    }

    public function setPriceUnit(?int $priceUnit): self
    {
        $this->priceUnit = $priceUnit;

        return $this;
    }

    public function getPriceM2(): ?int
    {
        return $this->priceM2;
    }

    public function setPriceM2(?int $priceM2): self
    {
        $this->priceM2 = $priceM2;

        return $this;
    }

    public function getNumberM2PerH(): ?int
    {
        return $this->numberM2PerH;
    }

    public function setNumberM2PerH(?int $numberM2PerH): self
    {
        $this->numberM2PerH = $numberM2PerH;

        return $this;
    }

    public function getPriceMin(): ?int
    {
        return $this->priceMin;
    }

    public function setPriceMin(?int $priceMin): self
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    public function getIdTypeFile(): ?FormType
    {
        return $this->idTypeFile;
    }

    public function setIdTypeFile(?FormType $idTypeFile): self
    {
        $this->idTypeFile = $idTypeFile;

        return $this;
    }


}
