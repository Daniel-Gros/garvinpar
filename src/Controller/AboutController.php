<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
  #[Route('/about', name: 'app_about')]
  public function aboutPage(): Response
  {
    return $this->render('page/about.html.twig', [
      'controller_name' => 'AboutController',
    ]);
  }
}
