<?php


namespace App\Entity\EAV;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Attribute
 * @package App\Entity\EAV
 * @ORM\Entity
 */
class Attribute
{
    /**
     * @var ?int
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private ?int $id = 0;

    /**
     * @var string
     * @ORM\Column type=string
     */
    private string $name;

    /**
     * @var AttributeGroup
     * @ORM\ManyToOne (targetEntity="AttributeGroup", inversedBy="attributes")
     */
    private AttributeGroup $attributeGroup;

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
     * @return AttributeGroup
     */
    public function getAttributeGroup(): AttributeGroup
    {
        return $this->attributeGroup;
    }

    /**
     * @param AttributeGroup $attributeGroup
     */
    public function setAttributeGroup(AttributeGroup $attributeGroup): void
    {
        $this->attributeGroup = $attributeGroup;
    }

    public function __toString()
    {
        return $this->getName();
    }

}