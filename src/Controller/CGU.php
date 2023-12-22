<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CGU extends AbstractController
{
    const URL="https://adresse.fr";
    const HEBERGEUR="Wix - Wix.com Inc. - 500 Terry A François Blvd San Francisco, CA 94158";
    #[Route('/cgu', name: 'app_cgu')]
    public function index(): Response
    {
        return $this->render('cgu/cgu.html.twig', [
            'URL' =>  self::URL,
            'HEBERGEUR' =>  self::HEBERGEUR,
        ]);
    }
}
