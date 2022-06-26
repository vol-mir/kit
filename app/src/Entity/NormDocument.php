<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\NormDocumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use DateTimeInterface;

/**
 * @ORM\Entity(repositoryClass=NormDocumentRepository::class)
 * @ORM\Table(name="norm_documents")
 * @ORM\HasLifecycleCallbacks()
 */
class NormDocument
{
    public const IN_DEVELOPING = 1;
    public const ON_APPROVAL = 2;
    public const APPROVAL = 3;

    public const STATUSES = [
        self::IN_DEVELOPING => 'status.in_developing',
        self::ON_APPROVAL => 'status.on_approval',
        self::APPROVAL => 'status.approval',
    ];

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
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     */
    private $status = 1;

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
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="norm_documents")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $product;

    /**
     * @Assert\Type("datetime")
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_document;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $close;

    /**
     * @var Rendition
     *
     * @ORM\ManyToOne(targetEntity=Rendition::class, inversedBy="norm_documents")
     * @ORM\JoinColumn(name="rendition_id", referencedColumnName="id", nullable=true)
     * @Assert\NotBlank
     */
    private $rendition;


    /**
     * @var MaterialNorm
     *
     * @ORM\OneToMany(targetEntity=MaterialNorm::class, mappedBy="norm_document", orphanRemoval=true, cascade={"remove"})
     */
    private $material_norms;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="norm_documents")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_avt;

    public function __construct()
    {
        $this->material_norms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getDateDocument(): ?\DateTimeInterface
    {
        return $this->date_document;
    }

    public function setDateDocument(?\DateTimeInterface $date_document): self
    {
        $this->date_document = $date_document;

        return $this;
    }

    public function getClose(): ?int
    {
        return $this->close;
    }

    public function setClose(?int $close): self
    {
        $this->close = $close;

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
            $material_norm->setNormDocument($this);
        }

        return $this;
    }

    public function removeMaterialNorm(MaterialNorm $material_norm): self
    {
        if ($this->material_norms->removeElement($material_norm)) {
            // set the owning side to null (unless already changed)
            if ($material_norm->getNormDocument() === $this) {
                $material_norm->setNormDocument(null);
            }
        }

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

    public function getIdAvt(): ?int
    {
        return $this->id_avt;
    }

    public function setIdAvt(?int $id_avt): self
    {
        $this->id_avt = $id_avt;

        return $this;
    }
}
