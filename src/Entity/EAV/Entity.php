<?php


namespace App\Entity\EAV;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Entity
 * @package App\Entity\EAV
 * @ORM\Entity
 */
class Entity
{
    /**
     * @var ?int
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private ?int $id = 0;

    /**
     * @var EntityType
     * @ORM\ManyToOne(targetEntity="EntityType", inversedBy="entities")
     */
    private EntityType $entityType;

    /**
     * @var string
     * @ORM\Column type=string
     */
    private string $name;

    /**
     * @var float
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private float $price;

    /**
     * @var iterable
     * @ORM\OneToMany(mappedBy="entity", targetEntity="Value")
     */
    private iterable $values;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function __toString()
    {
        return sprintf("%s(%d)", $this->getName(), $this->getId());
    }

    /**
     * @return EntityType
     */
    public function getEntityType(): EntityType
    {
        return $this->entityType;
    }

    /**
     * @param EntityType $entityType
     */
    public function setEntityType(EntityType $entityType): void
    {
        $this->entityType = $entityType;
    }

    /**
     * @return iterable
     */
    public function getValues(): iterable
    {
        return $this->values;
    }

    /**
     * @param iterable $values
     */
    public function setValues(iterable $values): void
    {
        $this->values = $values;
    }

}