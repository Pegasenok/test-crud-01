<?php

namespace App\Controller\Admin;

use App\Entity\EAV\AttributeGroup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AttributeGroupCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AttributeGroup::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('name'),
            AssociationField::new('entityTypes')->setFormTypeOption('disabled', true),
        ];
    }
}
