<?php

namespace App\Controller;

use App\Form\FormLogin;
use App\Form\FormLogAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FormContact;

class CreateEmployeeController extends AbstractController
{

  #[Route('/createemployee', name: 'app_formcreateemployee')]
  public function formCreateEmployee(): Response
  {
    return $this->render('form/formcreateemployee.html.twig', [
      'controller_name' => 'CreateEmployeeController',
    ]);
  }
}
