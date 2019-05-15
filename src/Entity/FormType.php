<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormType
 *
 * @ORM\Table(name="form_type", indexes={@ORM\Index(name="ID_Category", columns={"ID_Category"})})
 * @ORM\Entity
 */
class FormType
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Form_Type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormType;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Form_Type", type="string", length=50, nullable=false)
     */
    private $nameFormType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name_Category", type="string", length=50, nullable=true)
     */
    private $nameCategory;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Category", referencedColumnName="ID_Category")
     * })
     */
    private $idCategory;

    public function getIdFormType(): ?int
    {
        return $this->idFormType;
    }

    public function getNameFormType(): ?string
    {
        return $this->nameFormType;
    }

    public function setNameFormType(string $nameFormType): self
    {
        $this->nameFormType = $nameFormType;

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

    public function getIdCategory(): ?Category
    {
        return $this->idCategory;
    }

    public function setIdCategory(?Category $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }


}
