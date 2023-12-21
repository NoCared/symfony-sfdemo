<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Formation;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        //$adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        //return $this->redirect($adminUrlGenerator->setController(FormationCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    
            return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sfdemo');
    }

    public function configureMenuItems(): iterable
    {
        return[
            MenuItem::linkToDashboard('Dashboard', 'fa fa-dashboard'),
            MenuItem::linkToRoute('Retour au site', 'fas fa-home', 'app_home'),
            MenuItem::section('Categories'),
            MenuItem::linkToCrud('Categorie', 'fas fa-list', Categorie::class),
            MenuItem::section('Formations'),
            MenuItem::linkToCrud('Formation', 'fas fa-list', Formation::class),
            MenuItem::section('Users'),
            MenuItem::linkToCrud('User', 'fas fa-list', User::class)
        ];
    }
}
