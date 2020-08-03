<?php

namespace App\Controller\Admin;

use App\Entity\EAV\Attribute;
use App\Entity\EAV\AttributeGroup;
use App\Entity\EAV\Entity;
use App\Entity\EAV\EntityType;
use App\Entity\EAV\Value;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Www');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Value', 'fa fa-cc', Value::class);
        yield MenuItem::linkToCrud('EntityType', 'fa fa-cc', EntityType::class);
        yield MenuItem::linkToCrud('Entity', 'fa fa-cc', Entity::class);
        yield MenuItem::linkToCrud('Attribute', 'fa fa-cc', Attribute::class);
        yield MenuItem::linkToCrud('AttributeGroup', 'fa fa-cc', AttributeGroup::class);


    }
}
