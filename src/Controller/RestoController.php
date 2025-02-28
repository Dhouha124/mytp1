<?php

// src/Controller/RestoController.php

namespace App\Controller;

use App\Repository\RestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends AbstractController
{
    #[Route('/restaurants', name: 'restaurant_index')]
    public function index(RestRepository $restRepository): Response
    {
        // Récupérer tous les restaurants depuis la base de données
        $rest = $restRepository->findAll();

        // Passer les données à la vue
        return $this->render('resto/index.html.twig', [
            'rest' => $rest, // Données passées à la vue
        ]);
    }
    #[Route('/restaurants/{id}', name: 'restaurant_show')]
    public function show(RestRepository $restRepository, int $id): Response
    {
        // Récupérer le restaurant depuis la base de données
        $restaurant = $restRepository->find($id);

        // Vérifier si le restaurant existe
        if (!$restaurant) {
            throw $this->createNotFoundException('Restaurant non trouvé.');
        }

        return $this->render('resto/show.html.twig', [
            'restaurant' => $restaurant, // Passer l'objet restaurant à la vue sans les reviews
        ]);
    }
}
