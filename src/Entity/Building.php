<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingRepository")
 */
class Building
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Slide", inversedBy="buildings", cascade={"persist"})
     */
    private $slides;

    public function __toString()
    {
        return $this->name ? : '';
    }

    public function __construct()
    {
        $this->slides = new ArrayCollection();
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection|Slide[]
     */
    public function getSlides(): Collection
    {
        return $this->slides;
    }



    public function addSlide(Slide $slide): self
    {
        if (!$this->slides->contains($slide)) {
            $this->slides[] = $slide;
            $slide->addBuilding($this);
        }

        return $this;
    }

    public function removeSlide(Slide $slide): self
    {
        if ($this->slides->contains($slide)) {
            $this->slides->removeElement($slide);
        }

        return $this;
    }
}
