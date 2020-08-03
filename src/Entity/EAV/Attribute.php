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
     * @var AttributeGroup
     * @ORM\ManyToOne (targetEntity="AttributeGroup")
     */
    private AttributeGroup $attributeGroup;
}