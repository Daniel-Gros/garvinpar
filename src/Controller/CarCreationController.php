<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CarCreationController extends AbstractController
{

  #[Route('/carcreation', name: 'app_formcreatecar')]
  public function formCreateCar(): Response
  {
    return $this->render('form/formcreatecar.html.twig', [
      'controller_name' => 'CarCreationController',
    ]);
  }
}
