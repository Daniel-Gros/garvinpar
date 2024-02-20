<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class OpeningHourController extends AbstractController
{

  #[Route('/horaires', name: 'app_openinghour')]
  public function openingHour(): Response
  {


    return $this->render('page/openinghours.html.twig', [
      'controller_name' => 'OpeningHourController',
    ]);
  }
}
