<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ErrorController extends AbstractController
{
    #[Route('/error', name: 'app_error')]
    public function loginError(): Response
    {
        return $this->render('error/index.html.twig', [
            'controller_name' => 'ErrorController',
        ]);
    }
}

$maxAttempts = 3;
$attempts = 0;
$logOk = false;
$logError = false;
// $loginSuperAdmin = $_POST['loginSuperAdmin'];
// $passwordSuperAdmin = $_POST['passwordSuperAdmin'];
// $loginAdmin = $_POST['loginAdmin'];
// $passwordAdmin = $_POST['passwordAdmin'];
