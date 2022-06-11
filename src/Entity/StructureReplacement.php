<?php

namespace App\Entity;

use App\Repository\StructureReplacementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StructureReplacementRepository::class)
 */
class StructureReplacement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Structure
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure", inversedBy="structure_repl_mains")
     * @ORM\JoinColumn(name="structure_main_id", referencedColumnName="id", nullable=true)
     */
    private $structure_main;

    /**
     * @var Structure
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure", inversedBy="structure_repl_replacements")
     * @ORM\JoinColumn(name="structure_replacement_id", referencedColumnName="id", nullable=true)
     */
    private $structure_replacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStructureMain(): ?Structure
    {
        return $this->structure_main;
    }

    public function setStructureMain(?Structure $structure_main): self
    {
        $this->structure_main = $structure_main;

        return $this;
    }

    public function getStructureReplacement(): ?Structure
    {
        return $this->structure_replacement;
    }

    public function setStructureReplacement(?Structure $structure_replacement): self
    {
        $this->structure_replacement = $structure_replacement;

        return $this;
    }
}
