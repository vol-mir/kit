<?php

namespace App\Entity;

use App\Repository\TrackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use DateTimeInterface;

/**
 * @ORM\Entity(repositoryClass=TrackRepository::class)
 * @ORM\Table(name="tracks")
 * @ORM\HasLifecycleCallbacks()
 */
class Track
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
     * @ORM\ManyToOne(targetEntity=Department::class, inversedBy="tracks")
     * @ORM\JoinColumn(name="department_id", referencedColumnName="id", nullable=true)
     */
    private $department;

    /**
     * @ORM\ManyToOne(targetEntity=TrackDocument::class, inversedBy="tracks")
     * @ORM\JoinColumn(name="track_document_id", referencedColumnName="id", nullable=true)
     */
    private $track_document;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $time_cycle;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $time_processing;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $time_piece;

    /**
     * @ORM\ManyToOne(targetEntity=TechnologicalOperation::class, inversedBy="tracks")
     * @ORM\JoinColumn(name="technological_operation_id", referencedColumnName="id", nullable=true)
     */
    private $technological_operation;

    /**
     * @ORM\Column(type="string", length=190, nullable=true)
     */
    private $number_operation;

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

    public function setIndexNumber(int $index_number): self
    {
        $this->index_number = $index_number;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getTrackDocument(): ?TrackDocument
    {
        return $this->track_document;
    }

    public function setTrackDocument(?TrackDocument $track_document): self
    {
        $this->track_document = $track_document;

        return $this;
    }

    public function getTimeCycle(): ?float
    {
        return $this->time_cycle;
    }

    public function setTimeCycle(?float $time_cycle): self
    {
        $this->time_cycle = $time_cycle;

        return $this;
    }

    public function getTimeProcessing(): ?float
    {
        return $this->time_processing;
    }

    public function setTimeProcessing(?float $time_processing): self
    {
        $this->time_processing = $time_processing;

        return $this;
    }

    public function getTimePiece(): ?float
    {
        return $this->time_piece;
    }

    public function setTimePiece(?float $time_piece): self
    {
        $this->time_piece = $time_piece;

        return $this;
    }

    public function getTechnologicalOperation(): ?TechnologicalOperation
    {
        return $this->technological_operation;
    }

    public function setTechnologicalOperation(?TechnologicalOperation $technological_operation): self
    {
        $this->technological_operation = $technological_operation;

        return $this;
    }

    public function getNumberOperation(): ?string
    {
        return $this->number_operation;
    }

    public function setNumberOperation(?string $number_operation): self
    {
        $this->number_operation = $number_operation;

        return $this;
    }
}
