<?php

namespace App\Controller;

use App\Form\FormLogin;
use App\Form\FormLogAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FormContact;

class OpinionController extends AbstractController
{


    #[Route('/avisclient', name: 'app_formavisclient')]
    public function formAvisClient(): Response
    {
        return $this->render('form/formavisclient.html.twig', [
            'controller_name' => 'OpinionController',
        ]);
    }
}
