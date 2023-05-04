<?php

namespace App\Entity\Posts;

use App\Entity\Accounts\Member;
use App\Repository\Posts\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: PostRepository::class)]

class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("Post:Get")]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(["Post:Get", "Post:Post"])]
    private ?string $text = null;

    #[ORM\Column]
    #[Groups("Post:Get")]
    private ?int $totalLikes = 0;

    #[ORM\Column]
    #[Groups("Post:Get")]
    private ?int $totalShares = 0;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["Post:Get", "Post:Post"])]
    private ?Member $poster = null;



    #[ORM\ManyToMany(targetEntity: Member::class)]
    #[ORM\JoinTable(name: 'post_likes')]
    private Collection $memberLikes;



    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("Post:Get")]
    private ?\DateTimeInterface $createdAt;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("Post:Get")]
    private ?\DateTimeInterface $updatedAt;



    public function __construct()
    {
        $this->memberLikes = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTotalLikes(): ?int
    {
        return $this->totalLikes;
    }

    public function setTotalLikes(int $totalLikes): self
    {
        $this->totalLikes = $totalLikes;

        return $this;
    }

    public function getTotalShares(): ?int
    {
        return $this->totalShares;
    }

    public function setTotalShares(int $totalShares): self
    {
        $this->totalShares = $totalShares;

        return $this;
    }

    public function getPoster(): ?Member
    {
        return $this->poster;
    }

    public function setPoster(?Member $poster): self
    {
        $this->poster = $poster;

        return $this;
    }



    /**
     * @return Collection<int, Member>
     */
    public function getMemberLikes(): Collection
    {
        return $this->memberLikes;
    }

    public function addMemberLike(Member $memberLike): self
    {
        if (!$this->memberLikes->contains($memberLike)) {
            $this->memberLikes->add($memberLike);
        }

        return $this;
    }

    public function removeMemberLike(Member $memberLike): self
    {
        $this->memberLikes->removeElement($memberLike);

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }





}
