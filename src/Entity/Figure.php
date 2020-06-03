<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FigureRepository")
 */
class Figure
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, max=255, minMessage="Le nom de la figure est trop court (5 caractères minimum).")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=20, minMessage="La description de la figure est trop courte (20 caractères minimum).")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, max=255, minMessage="Le nom de la vidéo est trop court (5 caractères minimum)")
     */
    private $video;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="figures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category_figure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="figure", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Images", mappedBy="figures", 
     * orphanRemoval=true, cascade={"persist"})
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="authors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $figure_user;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->images = new ArrayCollection();
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCategoryFigure(): ?Category
    {
        return $this->category_figure;
    }

    public function setCategoryFigure(?Category $category_figure): self
    {
        $this->category_figure = $category_figure;

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
            $comment->setFigure($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getFigure() === $this) {
                $comment->setFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setFigures($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->contains($image)) {
            $this->images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getFigures() === $this) {
                $image->setFigures(null);
            }
        }

        return $this;
    }

    public function getFigureUser(): ?User
    {
        return $this->figure_user;
    }

    public function setFigureUser(?User $figure_user): self
    {
        $this->comment_user = $comment_user;

        return $this;
    }
}
