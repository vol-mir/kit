<?php

namespace App\Entity;

use App\Entity\Product;
use App\Repository\StructureRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=StructureRepository::class)
 * @ORM\Table(name="structures")
 * @ORM\HasLifecycleCallbacks()
 */
class Structure
{
    public const EMPTY = 0;
    public const A4 = 1;
    public const A3 = 2;
    public const A2 = 3;
    public const A1 = 4;
    public const A0 = 5;
    public const BCH = 6;
    public const OTHER = 7;

    public const FORMATS = [
        self::EMPTY => 'format.EMPTY',
        self::BCH => 'format.BCH',
        self::A4 => 'format.A4',
        self::A3 => 'format.A3',
        self::A2 => 'format.A2',
        self::A1 => 'format.A1',
        self::A0 => 'format.A0',
        self::OTHER => 'format.OTHER',
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
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true, options={"unsigned"=true})
     * @Assert\NotBlank
     */
    private $format = 0;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $area;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

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
     * @var Specification
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Specification", inversedBy="structures")
     * @ORM\JoinColumn(name="specification_id", referencedColumnName="id", nullable=true)
     */
    private $specification;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="structures")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $product;

    /**
     * @var StructureReplacement
     *
     * @ORM\OneToMany(targetEntity="App\Entity\StructureReplacement", mappedBy="structure_main", cascade={"remove"})
     */
    private $structure_repl_mains;

    /**
     * @var StructureReplacement
     *
     * @ORM\OneToMany(targetEntity="App\Entity\StructureReplacement", mappedBy="structure_replacement", cascade={"remove"})
     */
    private $structure_repl_replacements;

    /**
     * @ORM\Column(type="boolean")
     */
    private $main_replacement = true;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;


    public function __construct()
    {
        $this->structure_repl_mains = new ArrayCollection();
        $this->structure_repl_replacements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormat(): ?int
    {
        return $this->format;
    }

    public function setFormat(?int $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
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

    public function getSpecification(): ?Specification
    {
        return $this->specification;
    }

    public function setSpecification(?Specification $specification): self
    {
        $this->specification = $specification;

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
     * @return Collection|StructureReplacement[]
     */
    public function getStructureRepltMains(): Collection
    {
        return $this->structure_repl_mains;
    }

    public function addStructureReplMain(StructureReplacement $structure_repl_main): self
    {
        if (!$this->structure_repl_mains->contains($structure_repl_main)) {
            $this->structure_repl_mains[] = $structure_repl_main;
            $structure_repl_main->setStructureMain($this);
        }

        return $this;
    }

    public function removeStructureReplMain(StructureReplacement $structure_repl_main): self
    {
        if ($this->structure_repl_mains->removeElement($structure_repl_main)) {
            // set the owning side to null (unless already changed)
            if ($structure_repl_main->getStructureMain() === $this) {
                $structure_repl_main->setStructureMain(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|StructureReplacement[]
     */
    public function getStructureReplReplacements(): Collection
    {
        return $this->structure_repl_replacements;
    }

    public function addStructureReplReplacement(StructureReplacement $structure_repl_replacement): self
    {
        if (!$this->structure_repl_replacements->contains($structure_repl_replacement)) {
            $this->structure_repl_replacements[] = $structure_repl_replacement;
            $structure_repl_replacement->setStructureReplacement($this);
        }

        return $this;
    }

    public function removeStructureReplReplacement(StructureReplacement $structure_repl_replacement): self
    {
        if ($this->structure_repl_replacements->removeElement($structure_repl_replacement)) {
            // set the owning side to null (unless already changed)
            if ($structure_repl_replacement->getStructureReplacement() === $this) {
                $structure_repl_replacement->setStructureReplacement(null);
            }
        }

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

}
