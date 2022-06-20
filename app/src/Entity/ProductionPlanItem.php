<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use App\Repository\ProductionPlanItemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=ProductionPlanItemRepository::class)
 * @ORM\Table(name="production_plan_items")
 * @ORM\HasLifecycleCallbacks()
 */
class ProductionPlanItem
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
     * @ORM\ManyToOne(targetEntity=ProductionPlan::class, inversedBy="productionPlanItems")
     * @ORM\JoinColumn(name="production_plan_id", referencedColumnName="id", nullable=true)
     */
    private $production_plan;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="productionPlanItems")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity=Rendition::class, inversedBy="productionPlanItems")
     * @ORM\JoinColumn(name="rendition_id", referencedColumnName="id", nullable=true)
     */
    private $rendition;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $amount;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setIndexNumber(?int $index_number): self
    {
        $this->index_number = $index_number;

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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
