<?php

namespace App\Entity;

use App\Repository\Menu1Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Menu1Repository::class)
 */
class Menu1
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName1(): ?string
    {
        return $this->name1;
    }

    public function setName1(?string $name1): self
    {
        $this->name1 = $name1;

        return $this;
    }
}
