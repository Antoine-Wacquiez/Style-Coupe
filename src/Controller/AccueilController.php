<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PrestationRepository;
use App\Repository\UserRepository;
// use App\Repository\RendezVousRepository;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(
        PrestationRepository $prestationRepository,
        UserRepository $userRepository,
        // RendezVousRepository $rendezVousRepository
    ): Response {
        $prestations = $prestationRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'totalPrestations' => count($prestations),
            'totalUsers' => $userRepository->count([]),
            'prestations' => $prestations,
            // 'totalRdv' => $rendezVousRepository->count([]),
        ]);
    }
}
