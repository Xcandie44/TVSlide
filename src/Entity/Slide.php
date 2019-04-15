<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SlideRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Slide
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
    private $title;

    /**
     * @Assert\File(
     *     mimeTypes = {"video/*", "image/*"},
     *     mimeTypesMessage = "Please upload valid video or image file."
     * )
     */

    private $file;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $format;

    /**
     * @ORM\Column(type="float")
     */

    private $duration = 15;

    /**
     * @ORM\Column(type="integer")
     */
    private $priority;
    /**
     * @ORM\Column(type="integer")
     */
    private $height;
    /**
     * @ORM\Column(type="integer")
     */
    private $width;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isVideo = false;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $showFrom;
    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $showFor;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Building", mappedBy="slides", cascade={"persist"})
     */
    private $buildings;

    public function __construct()
    {
        $this->buildings = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title ? : '';
    }

    /** @ORM\PreRemove */
    public function fileRemoveFunction()
    {
        $url = $this->url;
        $webFolder = __DIR__.'/../../public';
        unlink($webFolder.$url);
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
       /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format): void
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getisVideo()
    {
        return $this->isVideo;
    }

    /**
     * @param mixed $isVideo
     */
    public function setIsVideo($isVideo): void
    {
        $this->isVideo = $isVideo;
    }

    /**
     * @return Collection|Building[]
     */
    public function getBuildings(): Collection
    {
        return $this->buildings;
    }

    public function addBuilding(Building $building): self
    {
        if (!$this->buildings->contains($building)) {
            $this->buildings[] = $building;
            $building->addSlide($this);
        }

        return $this;
    }

    public function removeBuilding(Building $building): self
    {
        if ($this->buildings->contains($building)) {
            $this->buildings->removeElement($building);
            $building->removeSlide($this);
        }

        return $this;
    }

    public function getShowFrom(): ?\DateTimeInterface
    {
        return $this->showFrom;
    }

    public function setShowFrom(\DateTimeInterface $showFrom): self
    {
        $this->showFrom = $showFrom;

        return $this;
    }

    public function getShowFor(): ?\DateTimeInterface
    {
        return $this->showFor;
    }

    public function setShowFor(\DateTimeInterface $showFor): self
    {
        $this->showFor = $showFor;

        return $this;
    }




}
