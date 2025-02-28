<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilcontrollerController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $restaurants = [
            ['name' => 'Le Gourmet', 'rating' => 4.5],
            ['name' => 'Chez Pierre', 'rating' => 4.7],
        ];

        return $this->render('home/index.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }
}

