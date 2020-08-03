<?php


namespace App\Entity\EAV;


use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class EntityType
 * @package App\Entity\EAV
 * @ORM\Entity
 */
class EntityType
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id = 0;

    /**
     * @var string
     * @ORM\Column type="integer"
     */
    private string $type;

    /**
     * @var Collection|Entity[]
     * @ORM\OneToMany(targetEntity="Entity", mappedBy="entityType")
     */
    private Collection $entities;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Entity[]|Collection
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param Entity[]|Collection $entities
     */
    public function setEntities($entities): void
    {
        $this->entities = $entities;
    }

    public function __toString()
    {
        return $this->getType();
    }


}