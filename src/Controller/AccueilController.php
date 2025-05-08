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
        return $this->render('accueil/index.html.twig', [
            'totalPrestations' => $prestationRepository->count([]),
            'totalUsers' => $userRepository->count([]),
            // 'totalRdv' => $rendezVousRepository->count([]),
        ]);
    }
}
