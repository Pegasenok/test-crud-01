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
    private int $id;
}