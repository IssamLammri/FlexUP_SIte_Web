<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", indexes={@ORM\Index(name="ID_Category_Parent", columns={"ID_Category_Parent"})})
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Category", type="string", length=50, nullable=false)
     */
    private $nameCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="Level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Category_Parent", referencedColumnName="ID_Category")
     * })
     */
    private $idCategoryParent;

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getIdCategoryParent(): ?self
    {
        return $this->idCategoryParent;
    }

    public function setIdCategoryParent(?self $idCategoryParent): self
    {
        $this->idCategoryParent = $idCategoryParent;

        return $this;
    }
    public function __toString()
    {
        return $this->nameCategory;
    }


}
