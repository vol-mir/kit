<?php

namespace App\Entity;

use App\Repository\MaterialNormReplacementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MaterialNormReplacementRepository::class)
 */
class MaterialNormReplacement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var MaterialNorm
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\MaterialNorm", inversedBy="material_norm_repl_mains")
     * @ORM\JoinColumn(name="material_norm_main_id", referencedColumnName="id", nullable=true)
     */
    private $material_norm_main;

    /**
     * @var MaterialNorm
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\MaterialNorm", inversedBy="material_norm_repl_replacements")
     * @ORM\JoinColumn(name="material_norm_replacement_id", referencedColumnName="id", nullable=true)
     */
    private $material_norm_replacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaterialNormMain(): ?MaterialNorm
    {
        return $this->material_norm_main;
    }

    public function setMaterialNormMain(?MaterialNorm $material_norm_main): self
    {
        $this->material_norm_main = $material_norm_main;

        return $this;
    }

    public function getMaterialNormReplacement(): ?MaterialNorm
    {
        return $this->material_norm_replacement;
    }

    public function setMaterialNormReplacement(?MaterialNorm $material_norm_replacement): self
    {
        $this->material_norm_replacement = $material_norm_replacement;

        return $this;
    }
}
