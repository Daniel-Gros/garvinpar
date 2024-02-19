<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FormContact;

class ContactController extends AbstractController
{


  #[Route('/formcontact', name: 'app_formcontact')]
  public function formContact(): Response
  {
    $form = $this->createForm(FormContact::class);
    return $this->render('form/formcontact.html.twig', [
      'controller_name' => 'ContactController'
    ]);
  }
}
