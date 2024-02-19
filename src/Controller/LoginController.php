<?php

namespace App\Controller;

use App\Form\FormLogin;
use App\Form\FormLogAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController extends AbstractController
{
  #[Route('/login', name: 'app_login')]
  public function formLogin(): Response
  {
    return $this->render('form/formlogin.html.twig', [
      'controller_name' => 'LoginController',
    ]);
  }
}
