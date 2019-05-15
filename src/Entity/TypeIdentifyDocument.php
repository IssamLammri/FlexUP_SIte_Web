<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeIdentifyDocument
 *
 * @ORM\Table(name="type_identify_document")
 * @ORM\Entity
 */
class TypeIdentifyDocument
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Type_Identify", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeIdentify;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Francais", type="string", length=100, nullable=false)
     */
    private $nameFrancais;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_English", type="string", length=100, nullable=false)
     */
    private $nameEnglish;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Italy", type="string", length=100, nullable=true)
     */
    private $nameItaly;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Arabic", type="string", length=100, nullable=true)
     */
    private $nameArabic;

    public function getIdTypeIdentify(): ?int
    {
        return $this->idTypeIdentify;
    }

    public function getNameFrancais(): ?string
    {
        return $this->nameFrancais;
    }

    public function setNameFrancais(string $nameFrancais): self
    {
        $this->nameFrancais = $nameFrancais;

        return $this;
    }

    public function getNameEnglish(): ?string
    {
        return $this->nameEnglish;
    }

    public function setNameEnglish(string $nameEnglish): self
    {
        $this->nameEnglish = $nameEnglish;

        return $this;
    }

    public function getNameItaly(): ?string
    {
        return $this->nameItaly;
    }

    public function setNameItaly(?string $nameItaly): self
    {
        $this->nameItaly = $nameItaly;

        return $this;
    }

    public function getNameArabic(): ?string
    {
        return $this->nameArabic;
    }

    public function setNameArabic(?string $nameArabic): self
    {
        $this->nameArabic = $nameArabic;

        return $this;
    }


}
