<?php


namespace App\Entity\EAV;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class AttributeGroup
 * @package App\Entity\EAV
 * @ORM\Entity
 */
class AttributeGroup
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
     * @ORM\Column type=string
     */
    private string $name;

    /**
     * @var iterable
     * @ORM\OneToMany(targetEntity="Attribute", mappedBy="attributeGroup")
     */
    private iterable $attributes;

    /**
     * @var iterable
     * @ORM\ManyToMany (targetEntity="EntityType", mappedBy="attributeGroups")
     */
    private iterable $entityTypes;

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
     * @return iterable
     */
    public function getAttributes(): iterable
    {
        return $this->attributes;
    }

    /**
     * @param iterable $attributes
     */
    public function setAttributes(iterable $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return iterable
     */
    public function getEntityTypes(): iterable
    {
        return $this->entityTypes;
    }

    /**
     * @param iterable $entityTypes
     */
    public function setEntityTypes(iterable $entityTypes): void
    {
        $this->entityTypes = $entityTypes;
    }

}