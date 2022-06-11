<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity("username")
 */
class User implements UserInterface
{

    public const ROLES = [
        'ROLE_ADMIN' => 'ROLE_ADMIN',
        'ROLE_OGK' => 'ROLE_OGK',
        'ROLE_OGT' => 'ROLE_OGT',
        'ROLE_PEO' => 'ROLE_PEO',
        'ROLE_BUH' => 'ROLE_BUH',
        'ROLE_PLAN' => 'ROLE_PLAN',
    ];

    public const DEPARTMENTS = [
        12 => 'department.oge',
        15 => 'department.oit',
        18 => 'department.ogk',
        19 => 'department.ogt',
        21 => 'department.ogm',
        25 => 'department.peo',
        26 => 'department.accounts',
        27 => 'department.omtsvk',
        29 => 'department.op',
        30 => 'department.rsmy',
        31 => 'department.omp',
        40 => 'department.om',
        45 => 'department.atc',
        47 => 'department.ootpbie',
        48 => 'department.cil',
        57 => 'department.canteen',
    ];

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     */
    protected $plainPassword;
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank
     * @Assert\Length(max=180)
     */
    private $username;
    /**
     * @var array
     *
     * @ORM\Column(type="json")
     */
    private $roles = [];
    /**
     * @var string The hashed password
     *
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $middle_name;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true, options={"unsigned"=true})
     * @Assert\NotBlank
     * @Assert\PositiveOrZero
     */
    private $department;

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
     * @ORM\OneToMany(targetEntity=Specification::class, mappedBy="user")
     */
    private $specifications;

    /**
     * @var NormDocument
     *
     * @ORM\OneToMany(targetEntity=NormDocument::class, mappedBy="user")
     */
    private $norm_documents;

    /**
     * @var TrackDocument
     *
     * @ORM\OneToMany(targetEntity=TrackDocument::class, mappedBy="user")
     */
    private $track_documents;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="user", cascade={"remove"})
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=ProductionPlan::class, mappedBy="user", cascade={"remove"})
     */
    private $production_plans;


    public function __construct()
    {
        $this->specifications = new ArrayCollection();
        $this->norm_documents = new ArrayCollection();
        $this->track_documents = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->productionPlans = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(?string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(?string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middle_name;
    }

    public function setMiddleName(?string $middle_name): self
    {
        $this->middle_name = $middle_name;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->last_name . ' ' . mb_substr($this->first_name, 0, 1, "UTF-8") . '. ' . mb_substr($this->middle_name, 0, 1, "UTF-8") . '.';
    }


    public function getDepartment(): ?int
    {
        return $this->department;
    }

    public function setDepartment(?int $department): self
    {
        $this->department = $department;

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

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password): self
    {
        $this->plainPassword = $password;

        return $this;
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
            $specification->setUser($this);
        }

        return $this;
    }

    public function removeSpecification(Specification $specification): self
    {
        if ($this->specifications->removeElement($specification)) {
            // set the owning side to null (unless already changed)
            if ($specification->getUser() === $this) {
                $specification->setUser(null);
            }
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
            $norm_document->setUser($this);
        }

        return $this;
    }

    public function removeNormDocument(NormDocument $norm_document): self
    {
        if ($this->norm_documents->removeElement($norm_document)) {
            // set the owning side to null (unless already changed)
            if ($norm_document->getUser() === $this) {
                $norm_document->setUser(null);
            }
        }

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
            $track_document->setUser($this);
        }

        return $this;
    }

    public function removeTrackDocument(TrackDocument $track_document): self
    {
        if ($this->track_documents->removeElement($track_document)) {
            // set the owning side to null (unless already changed)
            if ($track_document->getUser() === $this) {
                $track_document->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProductionPlan[]
     */
    public function getProductionPlans(): Collection
    {
        return $this->production_plans;
    }

    public function addProductionPlan(ProductionPlan $production_plan): self
    {
        if (!$this->production_plans->contains($productionPlan)) {
            $this->production_plans[] = $productionPlan;
            $productionPlan->setUser($this);
        }

        return $this;
    }

    public function removeProductionPlan(ProductionPlan $production_plan): self
    {
        if ($this->production_plans->removeElement($production_plan)) {
            // set the owning side to null (unless already changed)
            if ($production_plan->getUser() === $this) {
                $production_plan->setUser(null);
            }
        }

        return $this;
    }
}
