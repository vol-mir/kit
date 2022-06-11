<?php

namespace App\Entity;

use App\Repository\TrackDocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use DateTimeInterface;

/**
 * @ORM\Entity(repositoryClass=TrackDocumentRepository::class)
 * @ORM\Table(name="track_documents")
 * @ORM\HasLifecycleCallbacks()
 */
class TrackDocument
{
    public const IN_DEVELOPING = 1;
    public const ON_APPROVAL = 2;
    public const APPROVAL = 3;
    public const IN_DEVELOPING_BGVP = 4;

    public const STATUSES = [
        self::IN_DEVELOPING => 'status.in_developing',
        self::ON_APPROVAL => 'status.on_approval',
        self::APPROVAL => 'status.approval',
        self::IN_DEVELOPING_BGVP => 'status.in_developing_bgvp',
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
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="track_documents")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $product;

    /**
     * @Assert\Type("datetime")
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_start;

    /**
     * @Assert\Type("datetime")
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_end;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $close;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="track_documents")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @var Rendition
     *
     * @ORM\ManyToOne(targetEntity=Rendition::class, inversedBy="track_documents")
     * @ORM\JoinColumn(name="rendition_id", referencedColumnName="id", nullable=true)
     * @Assert\NotBlank
     */
    private $rendition;

    /**
     * @var Track
     *
     * @ORM\OneToMany(targetEntity=Track::class, mappedBy="track_document", orphanRemoval=true, cascade={"remove"})
     */
    private $tracks;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
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

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start = null): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end = null): self
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getClose(): ?int
    {
        return $this->close;
    }

    public function setClose(int $close): self
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
            $track->setTrackDocument($this);
        }

        return $this;
    }

    public function removeTrack(Track $track): self
    {
        if ($this->tracks->removeElement($track)) {
            // set the owning side to null (unless already changed)
            if ($track->getTrackDocument() === $this) {
                $track->setTrackDocument(null);
            }
        }

        return $this;
    }


}
