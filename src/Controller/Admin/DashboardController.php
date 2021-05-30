<?php

namespace App\Controller\Admin;

use App\Entity\Classe;
use App\Entity\Departement;
use App\Entity\Etudiant;
use App\Entity\Prof;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

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
            ->setTitle('StarTimeTable');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('Departement', 'fa fa-building', Departement::class);
         yield MenuItem::linkToCrud('Les classes', 'fa fa-chalkboard', Classe::class);
         yield MenuItem::linkToCrud('Espace etudiants', 'fa fa-user-graduate', Etudiant::class);
         yield MenuItem::linkToCrud('Espace professeurs', ' fa fa-user', Prof::class);
         if($this->isGranted('ROLE_ADMIN')){
         yield MenuItem::linkToCrud('Espace utilisateurs', 'fa fa-users', User::class);
         }
    }
}
