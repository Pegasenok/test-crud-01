<?php

namespace App\Controller\Admin;

use App\Entity\EAV\Value;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ValueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Value::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('value'),
            AssociationField::new('entity'),
            AssociationField::new('attribute'),
        ];
    }
}
