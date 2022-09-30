<?php

namespace App\Entity;

use DateTime;
use App\Repository\ProductionPlanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProductionPlanRepository::class)
 * @ORM\Table(name="production_plans")
 * @ORM\HasLifecycleCallbacks()
 */
class ProductionPlan
{
    public const ACCOUNT_TYPES = ['Предварительный', '1-е извещение', '2-е извещение', '3-е извещение', '4-е извещение', '5-е извещение', '6-е извещение', '7-е извещение', '8-е извещение'];

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", options={"unsigned"=true})
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $id_erp;


    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_erp;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     */
    private $account_type = 0;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_begin_erp;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_end_erp;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="production_plans")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * @Assert\NotBlank
     */
    private $user;

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
     * @ORM\OneToMany(targetEntity=ProductionPlanItem::class, mappedBy="production_plan", orphanRemoval=true, cascade={"remove"})
     */
    private $productionPlanItems;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @ORM\OneToMany(targetEntity=NeedPurchasedProduct::class, mappedBy="production_plan", orphanRemoval=true, cascade={"remove"})
     */
    private $needPurchasedProducts;

    public function __construct()
    {
        $this->productionPlanItems = new ArrayCollection();
        $this->needPurchasedProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdErp(): ?string
    {
        return $this->id_erp;
    }

    public function setIdErp(string $id_erp): self
    {
        $this->id_erp = $id_erp;

        return $this;
    }

    public function getDateErp(): ?\DateTimeInterface
    {
        return $this->date_erp;
    }

    public function setDateErp(\DateTimeInterface $date_erp): self
    {
        $this->date_erp = $date_erp;

        return $this;
    }

    public function getAccountType(): ?int
    {
        return $this->account_type;
    }

    public function setAccountType(int $account_type): self
    {
        $this->account_type = $account_type;

        return $this;
    }

    public function getDateBeginErp(): ?\DateTimeInterface
    {
        return $this->date_begin_erp;
    }

    public function setDateBeginErp(\DateTimeInterface $date_begin_erp): self
    {
        $this->date_begin_erp = $date_begin_erp;

        return $this;
    }

    public function getDateEndErp(): ?\DateTimeInterface
    {
        return $this->date_end_erp;
    }

    public function setDateEndErp(\DateTimeInterface $date_end_erp): self
    {
        $this->date_end_erp = $date_end_erp;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    /**
     * @return Collection<int, ProductionPlanItem>
     */
    public function getProductionPlanItems(): Collection
    {
        return $this->productionPlanItems;
    }

    public function addProductionPlanItem(ProductionPlanItem $productionPlanItem): self
    {
        if (!$this->productionPlanItems->contains($productionPlanItem)) {
            $this->productionPlanItems[] = $productionPlanItem;
            $productionPlanItem->setProductionPlan($this);
        }

        return $this;
    }

    public function removeProductionPlanItem(ProductionPlanItem $productionPlanItem): self
    {
        if ($this->productionPlanItems->removeElement($productionPlanItem)) {
            // set the owning side to null (unless already changed)
            if ($productionPlanItem->getProductionPlan() === $this) {
                $productionPlanItem->setProductionPlan(null);
            }
        }

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

    /**
     * @return Collection<int, NeedPurchasedProduct>
     */
    public function getNeedPurchasedProducts(): Collection
    {
        return $this->needPurchasedProducts;
    }

    public function addNeedPurchasedProduct(NeedPurchasedProduct $needPurchasedProduct): self
    {
        if (!$this->needPurchasedProducts->contains($needPurchasedProduct)) {
            $this->needPurchasedProducts[] = $needPurchasedProduct;
            $needPurchasedProduct->setProductionPlan($this);
        }

        return $this;
    }

    public function removeNeedPurchasedProduct(NeedPurchasedProduct $needPurchasedProduct): self
    {
        if ($this->needPurchasedProducts->removeElement($needPurchasedProduct)) {
            // set the owning side to null (unless already changed)
            if ($needPurchasedProduct->getProductionPlan() === $this) {
                $needPurchasedProduct->setProductionPlan(null);
            }
        }

        return $this;
    }
}
