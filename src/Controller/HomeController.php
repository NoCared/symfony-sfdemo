<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public $users = [
        [
        'nom' => 'Paulo Biscotto',
        'email' => 'pauloleboss@gmail.com',
        'age' => 23
        ],
        [
        'nom' => 'Bla blo',
        'email' => 'blabla@free.fr',
        'age' => 54
        ],
        [
        'nom' => 'Fee Lation',
        'email' => 'negiubrengeniugrb@zerjhzerjerjutrezrztjrj.fr',
        'age' => 99
        ]
    ];


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'titre' => 'Titre : Demo Symfony',
            'nom' => 'Paulo Biscotto',
            'users' => $this->users
        ]);
    }
}
