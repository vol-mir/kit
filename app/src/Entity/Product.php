<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use App\Entity\Calculation;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 * @ORM\Table(name="products")
 * @ORM\EntityListeners({"App\Listener\ProductListener"})
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity({"name", "designation", "product_category"})
 */
class Product
{
    public const INTYPE_PRODUCT = 1;
    public const INTYPE_SPECIFICATION_SECTION = 2;
    public const INTYPE_MATERIAL = 3;
    public const INTYPE_DOCUMENT = 4;

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
     * @ORM\Column(type="string", length=190, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(max=190)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $designation;

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
     * @var Specification
     *
     * @ORM\OneToMany(targetEntity=Specification::class, mappedBy="product", cascade={"remove"})
     */
    private $specifications;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true, options={"default": 0})
     * @Assert\PositiveOrZero
     */
    private $weight;

    /**
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity=Unit::class, inversedBy="products")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", nullable=true)
     */
    private $unit;

    /**
     * @var ProductGroup
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductGroup", inversedBy="products")
     * @ORM\JoinColumn(name="product_group_id", referencedColumnName="id", nullable=true)
     */
    private $product_group;

    /**
     * @var ProductKind
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductKind", inversedBy="products")
     * @ORM\JoinColumn(name="product_kind_id", referencedColumnName="id", nullable=true)
     */
    private $product_kind;

    /**
     * @var ProductType
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductType", inversedBy="products")
     * @ORM\JoinColumn(name="product_type_id", referencedColumnName="id", nullable=true)
     */
    private $product_type;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false, options={"unsigned"=true})
     */
    private $intype;

    /**
     * @var Structure
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Structure", mappedBy="product")
     */
    private $structures;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $profile_name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $profile_standard;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $mark;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $mark_standard;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $material_kind;

    /**
     * @ORM\ManyToOne(targetEntity=ProductCategory::class, inversedBy="products")
     */

    /**
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductCategory", inversedBy="products")
     * @ORM\JoinColumn(name="product_category_id", referencedColumnName="id", nullable=true)
     */
    private $product_category;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_avt;

    /**
     * @ORM\Column(type="string", length=190, nullable=true)
     */
    private $type_avt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $name_short;

    /**
     * @ORM\Column(type="string", length=190, nullable=true)
     */
    private $standard;

    /**
     * @ORM\Column(type="string", length=190, nullable=true)
     */
    private $name_maz;

    /**
     * @ORM\Column(type="string", length=190, nullable=true)
     */
    private $designation_maz;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $length_product;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", inversedBy="kd_products", cascade={"persist"})
     * @ORM\JoinTable(name="kd_products_materials")
     *
     */
    private $kd_materials;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", mappedBy="kd_materials")
     */
    private $kd_products;

    /**
     * @var NormDocument
     *
     * @ORM\OneToMany(targetEntity=NormDocument::class, mappedBy="product", cascade={"remove"})
     */
    private $norm_documents;

    /**
     * @var MaterialNorm
     *
     * @ORM\OneToMany(targetEntity=MaterialNorm::class, mappedBy="material", orphanRemoval=true, cascade={"remove"})
     */
    private $material_norms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_pdo;

    /**
     * @ORM\OneToMany(targetEntity=TrackDocument::class, mappedBy="product")
     */
    private $track_documents;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $id_erp;

    /**
     * @var Calculation
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Calculation", inversedBy="products")
     * @ORM\JoinColumn(name="calculation_id", referencedColumnName="id", nullable=true)
     */
    private $calculation;

    /**
     * @var FinanceGroup
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\FinanceGroup", inversedBy="products")
     * @ORM\JoinColumn(name="finance_group_id", referencedColumnName="id", nullable=true)
     */
    private $finance_group;

    /**
     * @var AnalyticGroup
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\AnalyticGroup", inversedBy="products")
     * @ORM\JoinColumn(name="analytic_group_id", referencedColumnName="id", nullable=true)
     */
    private $analytic_group;

    /**
     * @var ProductionPlanItem
     *
     * @ORM\OneToMany(targetEntity=ProductionPlanItem::class, mappedBy="product", orphanRemoval=true, cascade={"remove"})
     */
    private $productionPlanItems;

    /**
     * @ORM\OneToMany(targetEntity=NeedPurchasedProduct::class, mappedBy="product", orphanRemoval=true, cascade={"remove"})
     */
    private $needPurchasedProducts;

    /**
     * @ORM\OneToMany(targetEntity=NeedPurchasedProductElement::class, mappedBy="product", orphanRemoval=true, cascade={"remove"})
     */
    private $needPurchasedProductElements;

    public function __construct()
    {
        $this->specifications = new ArrayCollection();
        $this->structures = new ArrayCollection();
        $this->materials = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->norm_documents = new ArrayCollection();
        $this->material_norms = new ArrayCollection();
        $this->track_documents = new ArrayCollection();
        $this->productionPlanItems = new ArrayCollection();
        $this->needPurchasedProducts = new ArrayCollection();
        $this->needPurchasedProductElements = new ArrayCollection();
    }

    public function __toString(): ?string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

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

    /**
     * @return Collection|Specification[]
     */
    public function getSpecifications(): Collection
    {
        return $this->specifications;
    }

    public function addSpecification(Specification $specification): self
    {
        if (!$this->specifications->contains($specification)) {
            $this->specifications[] = $specification;
            $specification->setProduct($this);
        }

        return $this;
    }

    public function removeSpecification(Specification $specification): self
    {
        if ($this->specifications->removeElement($specification)) {
            // set the owning side to null (unless already changed)
            if ($specification->getProduct() === $this) {
                $specification->setProduct(null);
            }
        }

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->name . ' ' . $this->designation;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getUnit(): ?Unit
    {
        return $this->unit;
    }

    public function setUnit(?Unit $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getProductGroup(): ?ProductGroup
    {
        return $this->product_group;
    }

    public function setProductGroup(?ProductGroup $product_group): self
    {
        $this->product_group = $product_group;

        return $this;
    }

    public function getProductKind(): ?ProductKind
    {
        return $this->product_kind;
    }

    public function setProductKind(?ProductKind $product_kind): self
    {
        $this->product_kind = $product_kind;

        return $this;
    }

    public function getProductType(): ?ProductType
    {
        return $this->product_type;
    }

    public function setProductType(?ProductType $product_type): self
    {
        $this->product_type = $product_type;

        return $this;
    }

    public function getIntype(): ?int
    {
        return $this->intype;
    }

    public function setIntype(int $intype): self
    {
        $this->intype = $intype;

        return $this;
    }

    /**
     * @return Collection|Structure[]
     */
    public function getStructures(): Collection
    {
        return $this->structures;
    }

    public function addStructure(Structure $structure): self
    {
        if (!$this->structures->contains($structure)) {
            $this->structures[] = $structure;
            $structure->setProduct($this);
        }

        return $this;
    }

    public function removeStructure(Structure $structure): self
    {
        if ($this->structures->removeElement($structure)) {
            // set the owning side to null (unless already changed)
            if ($structure->getProduct() === $this) {
                $structure->setProduct(null);
            }
        }

        return $this;
    }

    public function getProfileName(): ?string
    {
        return $this->profile_name;
    }

    public function setProfileName(?string $profile_name): self
    {
        $this->profile_name = $profile_name;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getProfileStandard(): ?string
    {
        return $this->profile_standard;
    }

    public function setProfileStandard(?string $profile_standard): self
    {
        $this->profile_standard = $profile_standard;

        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getMarkStandard(): ?string
    {
        return $this->mark_standard;
    }

    public function setMarkStandard(?string $mark_standard): self
    {
        $this->mark_standard = $mark_standard;

        return $this;
    }

    public function getMaterialKind(): ?string
    {
        return $this->material_kind;
    }

    public function setMaterialKind(?string $material_kind): self
    {
        $this->material_kind = $material_kind;

        return $this;
    }

    public function getProductCategory(): ?ProductCategory
    {
        return $this->product_category;
    }

    public function setProductCategory(?ProductCategory $product_category): self
    {
        $this->product_category = $product_category;

        return $this;
    }

    public function getIdAvt(): ?int
    {
        return $this->id_avt;
    }

    public function setIdAvt(?int $id_avt): self
    {
        $this->id_avt = $id_avt;

        return $this;
    }

    public function getTypeAvt(): ?string
    {
        return $this->type_avt;
    }

    public function setTypeAvt(?string $type_avt): self
    {
        $this->type_avt = $type_avt;

        return $this;
    }

    public function getNameShort(): ?string
    {
        return $this->name_short;
    }

    public function setNameShort(?string $name_short): self
    {
        $this->name_short = $name_short;

        return $this;
    }

    public function getStandard(): ?string
    {
        return $this->standard;
    }

    public function setStandard(?string $standard): self
    {
        $this->standard = $standard;

        return $this;
    }

    public function getNameMaz(): ?string
    {
        return $this->name_maz;
    }

    public function setNameMaz(?string $name_maz): self
    {
        $this->name_maz = $name_maz;

        return $this;
    }

    public function getDesignationMaz(): ?string
    {
        return $this->designation_maz;
    }

    public function setDesignationMaz(?string $designation_maz): self
    {
        $this->designation_maz = $designation_maz;

        return $this;
    }

    public function getLengthProduct(): ?float
    {
        return $this->length_product;
    }

    public function setLengthProduct(?float $length_product): self
    {
        $this->length_product = $length_product;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getKdMaterials(): ?Collection
    {
        return $this->kd_materials;
    }

    public function addKdMaterial(self $kd_material): self
    {
        if (is_array($this->kd_materials) && !$this->kd_materials->contains($kd_material)) {
            $this->kd_materials[] = $kd_material;
        } else {
            $this->kd_materials[] = $kd_material;
        }

        return $this;
    }

    public function removeKdMaterial(self $kd_material): self
    {
        $this->kd_materials->removeElement($kd_material);

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getKdProducts(): Collection
    {
        return $this->kd_products;
    }

    public function addKdProduct(self $kd_product): self
    {
        if (!$this->kd_products->contains($kd_product)) {
            $this->kd_products[] = $kd_product;
            $kd_product->addKdMaterial($this);
        }

        return $this;
    }

    public function removeKdProduct(self $kd_product): self
    {
        if ($this->kd_products->removeElement($kd_product)) {
            $kd_product->removeKdMaterial($this);
        }

        return $this;
    }

    /**
     * @return Collection|NormDocument[]
     */
    public function getNormDocuments(): Collection
    {
        return $this->norm_documents;
    }

    public function addNormDocument(NormDocument $norm_document): self
    {
        if (!$this->norm_documents->contains($norm_document)) {
            $this->norm_documents[] = $norm_document;
            $norm_document->setProduct($this);
        }

        return $this;
    }

    public function removeNormDocument(NormDocument $norm_document): self
    {
        if ($this->norm_documents->removeElement($norm_document)) {
            // set the owning side to null (unless already changed)
            if ($norm_document->getProduct() === $this) {
                $norm_document->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MaterialNorm[]
     */
    public function getMaterialNorms(): Collection
    {
        return $this->material_norms;
    }

    public function addMaterialNorm(MaterialNorm $material_norm): self
    {
        if (!$this->material_norms->contains($material_norm)) {
            $this->material_norms[] = $material_norm;
            $material_norm->setMaterial($this);
        }

        return $this;
    }

    public function removeMaterialNorm(MaterialNorm $material_norm): self
    {
        if ($this->material_norms->removeElement($material_norm)) {
            // set the owning side to null (unless already changed)
            if ($material_norm->getMaterial() === $this) {
                $material_norm->setMaterial(null);
            }
        }

        return $this;
    }

    public function getIdPdo(): ?int
    {
        return $this->id_pdo;
    }

    public function setIdPdo(?int $id_pdo): self
    {
        $this->id_pdo = $id_pdo;

        return $this;
    }

    /**
     * @return Collection|TrackDocument[]
     */
    public function getTrackDocuments(): Collection
    {
        return $this->track_documents;
    }

    public function addTrackDocument(TrackDocument $track_document): self
    {
        if (!$this->track_documents->contains($track_document)) {
            $this->track_documents[] = $track_document;
            $track_document->setProduct($this);
        }

        return $this;
    }

    public function removeTrackDocument(TrackDocument $track_document): self
    {
        if ($this->track_documents->removeElement($track_document)) {
            // set the owning side to null (unless already changed)
            if ($track_document->getProduct() === $this) {
                $track_document->setProduct(null);
            }
        }

        return $this;
    }

    public function getIdErp(): ?string
    {
        return $this->id_erp;
    }

    public function setIdErp(?string $id_erp): self
    {
        $this->id_erp = $id_erp;

        return $this;
    }

    public function getReady(): ?int
    {
        $cnt = 7;
        $ready = 0;
        if ($this->getProductGroup() && $this->getProductGroup()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        if ($this->getProductType() && $this->getProductType()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        if ($this->getProductKind() && $this->getProductKind()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        if ($this->getProductCategory() && $this->getProductCategory()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        if ($this->getCalculation() && $this->getCalculation()->getId() > 1) {
            $ready += 100 / $cnt;
        }

        if ($this->getFinanceGroup() && $this->getFinanceGroup()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        if ($this->getAnalyticGroup() && $this->getAnalyticGroup()->getId() > 1) {
            $ready += 100 / $cnt;
        }
        return $ready;
    }

    public function getCalculation(): ?Calculation
    {
        return $this->calculation;
    }

    public function setCalculation(?Calculation $calculation): self
    {
        $this->calculation = $calculation;

        return $this;
    }

    public function getFinanceGroup(): ?FinanceGroup
    {
        return $this->finance_group;
    }

    public function setFinanceGroup(?FinanceGroup $finance_group): self
    {
        $this->finance_group = $finance_group;

        return $this;
    }

    public function getAnalyticGroup(): ?AnalyticGroup
    {
        return $this->analytic_group;
    }

    public function setAnalyticGroup(?AnalyticGroup $analytic_group): self
    {
        $this->analytic_group = $analytic_group;

        return $this;
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
            $productionPlanItem->setProduct($this);
        }

        return $this;
    }

    public function removeProductionPlanItem(ProductionPlanItem $productionPlanItem): self
    {
        if ($this->productionPlanItems->removeElement($productionPlanItem)) {
            // set the owning side to null (unless already changed)
            if ($productionPlanItem->getProduct() === $this) {
                $productionPlanItem->setProduct(null);
            }
        }

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
            $needPurchasedProduct->setProduct($this);
        }

        return $this;
    }

    public function removeNeedPurchasedProduct(NeedPurchasedProduct $needPurchasedProduct): self
    {
        if ($this->needPurchasedProducts->removeElement($needPurchasedProduct)) {
            // set the owning side to null (unless already changed)
            if ($needPurchasedProduct->getProduct() === $this) {
                $needPurchasedProduct->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, NeedPurchasedProductElement>
     */
    public function getNeedPurchasedProductElements(): Collection
    {
        return $this->needPurchasedProductElements;
    }

    public function addNeedPurchasedProductElement(NeedPurchasedProductElement $needPurchasedProductElement): self
    {
        if (!$this->needPurchasedProductElements->contains($needPurchasedProductElement)) {
            $this->needPurchasedProductElements[] = $needPurchasedProductElement;
            $needPurchasedProductElement->setProduct($this);
        }

        return $this;
    }

    public function removeNeedPurchasedProductElement(NeedPurchasedProductElement $needPurchasedProductElement): self
    {
        if ($this->needPurchasedProductElements->removeElement($needPurchasedProductElement)) {
            // set the owning side to null (unless already changed)
            if ($needPurchasedProductElement->getProduct() === $this) {
                $needPurchasedProductElement->setProduct(null);
            }
        }

        return $this;
    }

}
