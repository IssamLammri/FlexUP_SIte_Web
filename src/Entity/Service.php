<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", indexes={@ORM\Index(name="ID_Category", columns={"ID_Category"})})
 * @ORM\Entity
 */
class Service
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idService;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Service", type="string", length=50, nullable=false)
     */
    private $nameService;

    /**
     * @var int
     *
     * @ORM\Column(name="Number_Form", type="integer", nullable=false)
     */
    private $numberForm;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Category", referencedColumnName="ID_Category")
     * })
     */
    private $idCategory;

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function getNameService(): ?string
    {
        return $this->nameService;
    }

    public function setNameService(string $nameService): self
    {
        $this->nameService = $nameService;

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
