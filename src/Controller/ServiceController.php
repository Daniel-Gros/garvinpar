<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ServiceController extends AbstractController
{
  #[Route('/service', name: 'app_service')]
  public function servicePage(): Response
  {
    return $this->render('page/service.html.twig', [
      'controller_name' => 'ServiceController',
    ]);
  }
}
