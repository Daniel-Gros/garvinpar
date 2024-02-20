<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OpinionController extends AbstractController
{


    #[Route('/avisclient', name: 'app_avis')]
    public function formAvisClient(): Response
    {
        return $this->render('form/formavisclient.html.twig', [
            'controller_name' => 'OpinionController',
        ]);
    }
}
