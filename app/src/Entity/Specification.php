<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\SpecificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use DateTimeInterface;

/**
 * @ORM\Entity(repositoryClass=SpecificationRepository::class)
 * @ORM\Table(name="specifications")
 * @ORM\HasLifecycleCallbacks()
 */
class Specification
{
    public const IN_DEVELOPING = 1;
    public const ON_APPROVAL = 2;
    public const APPROVAL = 3;
    public const ANNUL = 4;

    public const STATUSES = [
        self::IN_DEVELOPING => 'status.in_developing',
        self::ON_APPROVAL => 'status.on_approval',
        self::APPROVAL => 'status.approval',
        self::ANNUL => 'status.annul',
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
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="specifications")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $product;

    /**
     * @var Structure
     *
     * @ORM\OneToMany(targetEntity=Structure::class, mappedBy="specification", orphanRemoval=true, cascade={"remove"})
     */
    private $structures;

    /**
     * @Assert\Type("datetime")
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_specification;

    /**
     * @var Rendition
     *
     * @ORM\ManyToOne(targetEntity=Rendition::class, inversedBy="specifications")
     * @ORM\JoinColumn(name="rendition_id", referencedColumnName="id", nullable=true)
     * @Assert\NotBlank
     */
    private $rendition;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_avt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $close;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="specifications")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */

    private $user;

    public function __construct()
    {
        $this->structures = new ArrayCollection();
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
            $structure->setSpecification($this);
        }

        return $this;
    }

    public function removeStructure(Structure $structure): self
    {
        if ($this->structures->removeElement($structure)) {
            // set the owning side to null (unless already changed)
            if ($structure->getSpecification() === $this) {
                $structure->setSpecification(null);
            }
        }

        return $this;
    }

    public function getDateSpecification(): ?\DateTimeInterface
    {
        return $this->date_specification;
    }

    public function setDateSpecification(?\DateTimeInterface $date_specification): self
    {
        $this->date_specification = $date_specification;

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

    public function getIdAvt(): ?int
    {
        return $this->id_avt;
    }

    public function setIdAvt(?int $id_avt): self
    {
        $this->id_avt = $id_avt;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
