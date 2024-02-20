<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FormContact;

class ContactController extends AbstractController
{


  #[Route('/contact', name: 'app_contact_show')]
  public function formContact(): Response
  {
    return $this->render('form/formcontact.html.twig', [
      'controller_name' => 'ContactController'
    ]);
  }
}
