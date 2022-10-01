<?php

namespace App\Entity;

use App\Repository\NeedPurchasedProductElementRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Mapping\ClassMetadata;


/**
 * @ORM\Entity(repositoryClass=NeedPurchasedProductElementRepository::class)
 * @ORM\Table(name="need_purchased_product_elements")
 * @ORM\HasLifecycleCallbacks()
 */
class NeedPurchasedProductElement
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
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Specification::class, inversedBy="needPurchasedProductElements")
     * @ORM\JoinColumn(name="specification_id", referencedColumnName="id", nullable=true)     
     */
    private $specification;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="needPurchasedProductElements")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)     
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity=Rendition::class, inversedBy="needPurchasedProductElements")
     * @ORM\JoinColumn(name="rendition_id", referencedColumnName="id", nullable=true)     
     */
    private $rendition;

    /**
     * @ORM\ManyToOne(targetEntity=NormDocument::class, inversedBy="needPurchasedProductElements")
     * @ORM\JoinColumn(name="norm_document_id", referencedColumnName="id", nullable=true)     
     */
    private $norm_document;

    /**
     * @ORM\ManyToOne(targetEntity=ProductionPlan::class, inversedBy="needPurchasedProductElements")
     * @ORM\JoinColumn(name="production_plan_id", referencedColumnName="id", nullable=true)     
     */
    private $production_plan;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(name="parent", referencedColumnName="id", nullable=true)
     */
    private $parent;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(name="parent_material_id", referencedColumnName="id", nullable=true)
     */
    private $parent_material;

    
    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\PositiveOrZero
     */
    private $key_parent;

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
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $amount_standart;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $amount_all;

    public function __construct()
    {
        $this->needPurchasedProductElements = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSpecification(): ?Specification
    {
        return $this->specification;
    }

    public function setSpecification(?Specification $specification): self
    {
        $this->specification = $specification;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getRendition(): ?Rendition
    {
        return $this->rendition;
    }

    public function setRendition(?Rendition $rendition): self
    {
        $this->rendition = $rendition;

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

    public function getProductionPlan(): ?ProductionPlan
    {
        return $this->production_plan;
    }

    public function setProductionPlan(?ProductionPlan $production_plan): self
    {
        $this->production_plan = $production_plan;

        return $this;
    }

    public function getParent(): ?Product
    {
        return $this->parent;
    }

    public function setParent(?Product $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getKeyParent(): ?string
    {
        return $this->key_parent;
    }

    public function setKeyParent(?string $key_parent): self
    {
        $this->key_parent = $key_parent;

        return $this;
    }

    public function getParentMaterial(): ?Product
    {
        return $this->parent_material;
    }

    public function setParentMaterial(?Product $parent_material): self
    {
        $this->parent_material = $parent_material;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getAmountAll(): ?float
    {
        return $this->amount_all;
    }

    public function setAmountAll(?float $amount_all): self
    {
        $this->amount_all = $amount_all;

        return $this;
    }

    public function getAmountStandart(): ?float
    {
        return $this->amount_standart;
    }

    public function setAmountStandart(?float $amount_standart): self
    {
        $this->amount_standart = $amount_standart;

        return $this;
    }
}
