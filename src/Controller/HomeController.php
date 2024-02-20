<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/accueil', name: 'app_home')]
    public function homePage(): Response
    {
        return $this->render('page/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
