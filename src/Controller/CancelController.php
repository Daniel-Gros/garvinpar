<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CancelController extends AbstractController
{
  #[Route('/cancel', name: 'app_cancel')]
  public function cancel(): Response
  {
    return $this->render('page/cancel.html.twig', [
      'controller_name' => 'CancelController',
    ]);
  }
}
