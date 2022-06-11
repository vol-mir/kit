<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=DepartmentRepository::class)
 * @ORM\Table(name="departments")
 * @ORM\HasLifecycleCallbacks()
 */
class Department
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
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(max=190)
     */
    private $name;

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
     * @var Unit
     *
     * @ORM\ManyToOne(targetEntity=Department::class, inversedBy="childrens")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true)
     */
    private $parent;

    /**
     * @var Department
     *
     * @ORM\OneToMany(targetEntity=Department::class, mappedBy="parent")
     */
    private $childrens;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sorting_pdo;

    /**
     * @ORM\OneToMany(targetEntity=Track::class, mappedBy="department")
     */
    private $tracks;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_pdo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $number_department;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=190, nullable=true)
     * @Assert\Length(max=190)
     */
    private $number_area;

    public function __construct()
    {
        $this->departments = new ArrayCollection();
        $this->tracks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->number_department . ' - ' . $this->name;
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

    public function getParent(): ?Department
    {
        return $this->parent;
    }

    public function setParent(?Department $department): self
    {
        $this->parent = $department;

        return $this;
    }

    /**
     * @return Collection|Department[]
     */
    public function getChildrens(): Collection
    {
        return $this->childrens;
    }

    public function addChildren(Department $department): self
    {
        if (!$this->childrens->contains($department)) {
            $this->childrens[] = $department;
            $department->setParent($this);
        }

        return $this;
    }

    public function removeChildren(Department $department): self
    {
        if ($this->departments->removeElement($department)) {
            // set the owning side to null (unless already changed)
            if ($department->getParent() === $this) {
                $department->setParent(null);
            }
        }

        return $this;
    }

    public function getSortingPdo(): ?int
    {
        return $this->sorting_pdo;
    }

    public function setSortingPdo(?int $sorting_pdo): self
    {
        $this->sorting_pdo = $sorting_pdo;

        return $this;
    }

    /**
     * @return Collection|Track[]
     */
    public function getTracks(): Collection
    {
        return $this->tracks;
    }

    public function addTrack(Track $track): self
    {
        if (!$this->tracks->contains($track)) {
            $this->tracks[] = $track;
            $track->setDepartment($this);
        }

        return $this;
    }

    public function removeTrack(Track $track): self
    {
        if ($this->tracks->removeElement($track)) {
            // set the owning side to null (unless already changed)
            if ($track->getDepartment() === $this) {
                $track->setDepartment(null);
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

    public function getNumberDepartment(): ?string
    {
        return $this->number_department;
    }

    public function setNumberDepartment(?string $number_department): self
    {
        $this->number_department = $number_department;

        return $this;
    }

    public function getNumberArea(): ?string
    {
        return $this->number_area;
    }

    public function setNumberArea(?string $number_area): self
    {
        $this->number_area = $number_area;

        return $this;
    }
}
