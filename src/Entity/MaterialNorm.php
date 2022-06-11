<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\MaterialNormRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=MaterialNormRepository::class)
 * @ORM\Table(name="material_norms")
 * @ORM\HasLifecycleCallbacks()
 */
class MaterialNorm
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", options={"unsigned"=true})
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @var NormDocument
     *
     * @ORM\ManyToOne(targetEntity=NormDocument::class, inversedBy="material_norms")
     * @ORM\JoinColumn(name="norm_document_id", referencedColumnName="id", nullable=true)
     */
    private $norm_document;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $index_number;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="material_norms")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $material;

    /**
     * @ORM\Column(type="boolean")
     */
    private $main_replacement = true;

    /**
     * @var MaterialNormReplacement
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MaterialNormReplacement", mappedBy="material_norm_main", cascade={"remove"})
     */
    private $material_norm_repl_mains;

    /**
     * @var MaterialNormReplacement
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MaterialNormReplacement", mappedBy="material_norm_replacement", cascade={"remove"})
     */
    private $material_norm_repl_replacements;

    public function __construct()
    {
        $this->material_norm_repl_mains = new ArrayCollection();
        $this->material_norm_repl_replacements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getNormDocument(): ?NormDocument
    {
        return $this->norm_document;
    }

    public function setNormDocument(?NormDocument $norm_document): self
    {
        $this->norm_document = $norm_document;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }


    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist(): void
    {
        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate(): void
    {
        $this->updated_at = new DateTime();
    }

    public function getIndexNumber(): ?int
    {
        return $this->index_number;
    }

    public function setIndexNumber(int $index_number): self
    {
        $this->index_number = $index_number;

        return $this;
    }

    public function getMaterial(): ?Product
    {
        return $this->material;
    }

    public function setMaterial(?Product $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getMainReplacement(): ?bool
    {
        return $this->main_replacement;
    }

    public function setMainReplacement(bool $main_replacement): self
    {
        $this->main_replacement = $main_replacement;

        return $this;
    }


    /**
     * @return Collection|MaterialNormReplacement[]
     */
    public function getMaterialNormRepltMains(): Collection
    {
        return $this->material_norm_repl_mains;
    }

    public function addMaterialNormReplMain(MaterialNormReplacement $material_norm_repl_main): self
    {
        if (!$this->material_norm_repl_mains->contains($material_norm_repl_main)) {
            $this->material_norm_repl_mains[] = $material_norm_repl_main;
            $material_norm_repl_main->setMaterialNormMain($this);
        }

        return $this;
    }

    public function removeMaterialNormReplMain(MaterialNormReplacement $material_norm_repl_main): self
    {
        if ($this->material_norm_repl_mains->removeElement($material_norm_repl_main)) {
            // set the owning side to null (unless already changed)
            if ($material_norm_repl_main->getMaterialNormMain() === $this) {
                $material_norm_repl_main->setMaterialNormMain(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterialNormReplacement[]
     */
    public function getMaterialNormReplReplacements(): Collection
    {
        return $this->material_norm_repl_replacements;
    }

    public function addMaterialNormReplReplacement(MaterialNormReplacement $material_norm_repl_replacement): self
    {
        if (!$this->material_norm_repl_replacements->contains($material_norm_repl_replacement)) {
            $this->material_norm_repl_replacements[] = $material_norm_repl_replacement;
            $material_norm_repl_replacement->setMaterialNormReplacement($this);
        }

        return $this;
    }

    public function removeMaterialNormReplReplacement(MaterialNormReplacement $material_norm_repl_replacement): self
    {
        if ($this->material_norm_repl_replacements->removeElement($material_norm_repl_replacement)) {
            // set the owning side to null (unless already changed)
            if ($material_norm_repl_replacement->getMaterialNormReplacement() === $this) {
                $material_norm_repl_replacement->setMaterialNormReplacement(null);
            }
        }

        return $this;
    }


}
