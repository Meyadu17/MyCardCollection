<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/app_admin', name: 'app_admin')]
class LoginController extends AbstractController
{
    #[Route('/', name: '_login')]
    public function index(AuthenticationUtils $authenticationUtils, Security $security): Response
    {
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_home'); // Redirigez l'utilisateur connecté vers la page d'accueil
        }
        // Obtenez l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier nom d'utilisateur saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    #[Route(path: '/logout', name: '_logout')]
    public function logout(): never
    {
        // Le contrôleur peut être vide : il ne sera jamais appelé !
        throw new \Exception('N\'oubliez pas d\'activer la déconnexion dans security.yaml');
    }
}
