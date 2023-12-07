<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(FormationRepository $formationRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'formations' => $formationRepository->findAll(),
        ]);
    }

    #[Route('/home/{id}', name: 'app_index_show', methods: ['GET'])]
    public function show(Formation $formation): Response
    {
        return $this->render('home/show.html.twig', [
            'formation' => $formation,
        ]);
    }
}
