<?php

namespace App\Controller\Admin;

use App\Entity\EAV\EntityType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EntityTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EntityType::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('type'),
            AssociationField::new('entities'),
        ];
    }
}
