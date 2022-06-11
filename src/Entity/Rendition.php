<?php

namespace App\Entity;

use App\Repository\RenditionRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass=RenditionRepository::class)
 * @ORM\Table(name="renditions")
 * @ORM\HasLifecycleCallbacks()
 */
class Rendition
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
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
     * @var Specification
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Specification", mappedBy="rendition", cascade={"remove"})
     */
    private $specifications;

    /**
     * @ORM\OneToMany(targetEntity=NormDocument::class, mappedBy="rendition", cascade={"remove"})
     */
    private $norm_documents;

    /**
     * @ORM\OneToMany(targetEntity=TrackDocument::class, mappedBy="rendition", cascade={"remove"})
     */
    private $track_documents;

    public function __construct()
    {
        $this->specifications = new ArrayCollection();
        $this->norm_documents = new ArrayCollection();
        $this->track_documents = new ArrayCollection();
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
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
            $specification->setRendition($this);
        }

        return $this;
    }

    public function removeSpecification(Specification $specification): self
    {
        if ($this->specifications->removeElement($specification)) {
            // set the owning side to null (unless already changed)
            if ($specification->getRendition() === $this) {
                $specification->setRendition(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|NormDocument[]
     */
    public function getNormDocuments(): Collection
    {
        return $this->normDocuments;
    }

    public function addNormDocument(NormDocument $norm_document): self
    {
        if (!$this->norm_documents->contains($norm_document)) {
            $this->norm_documents[] = $norm_document;
            $norm_document->setRendition($this);
        }

        return $this;
    }

    public function removeNormDocument(NormDocument $norm_document): self
    {
        if ($this->norm_documents->removeElement($norm_document)) {
            // set the owning side to null (unless already changed)
            if ($norm_document->getRendition() === $this) {
                $norm_document->setRendition(null);
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
            $track_document->setRendition($this);
        }

        return $this;
    }

    public function removeTrackDocument(TrackDocument $track_document): self
    {
        if ($this->track_documents->removeElement($track_document)) {
            // set the owning side to null (unless already changed)
            if ($track_document->getRendition() === $this) {
                $track_document->setRendition(null);
            }
        }

        return $this;
    }
}
