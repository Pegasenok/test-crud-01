<?php


namespace App\Entity\EAV;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Value
 * @package App\Entity\EAV
 * @ORM\Entity
 */
class Value
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private int $id = 0;

    /**
     * @var Entity
     * @ORM\ManyToOne(targetEntity="Entity", inversedBy="values")
     */
    private Entity $entity;

    /**
     * @var Attribute
     * @ORM\ManyToOne(targetEntity="Attribute")
     */
    private Attribute $attribute;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $value;

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
     * @return Entity
     */
    public function getEntity(): Entity
    {
        return $this->entity;
    }

    /**
     * @param Entity $entity
     */
    public function setEntity(Entity $entity): void
    {
        $this->entity = $entity;
    }

    /**
     * @return Attribute
     */
    public function getAttribute(): Attribute
    {
        return $this->attribute;
    }

    /**
     * @param Attribute $attribute
     */
    public function setAttribute(Attribute $attribute): void
    {
        $this->attribute = $attribute;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->getValue();
    }


}