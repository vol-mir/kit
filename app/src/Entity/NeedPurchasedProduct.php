<?php

namespace App\Entity;

use App\Repository\NeedPurchasedProductRepository;
use App\Entity\ProductionPlan;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=NeedPurchasedProductRepository::class)
 * @ORM\Table(name="need_purchased_products")
 * ORM\HasLifecycleCallbacks()
 */
class NeedPurchasedProduct
{
    /**
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
    private $amount_all;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $balance_buy;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $balance_manufacture;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $prefix;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $amount_result;

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
     * @ORM\ManyToOne(targetEntity=ProductionPlan::class, inversedBy="needPurchasedProducts")
     * @ORM\JoinColumn(name="production_plan_id", referencedColumnName="id", nullable=true)
     */
    private $production_plan;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="needPurchasedProducts")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBalanceBuy(): ?float
    {
        return $this->balance_buy;
    }

    public function setBalanceBuy(?float $balance_buy): self
    {
        $this->balance_buy = $balance_buy;

        return $this;
    }

    public function getBalanceManufacture(): ?float
    {
        return $this->balance_manufacture;
    }

    public function setBalanceManufacture(?float $balance_manufacture): self
    {
        $this->balance_manufacture = $balance_manufacture;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getAmountResult(): ?float
    {
        return $this->amount_result;
    }

    public function setAmountResult(?float $amount_result): self
    {
        $this->amount_result = $amount_result;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): ?DateTimeInterface
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
}
