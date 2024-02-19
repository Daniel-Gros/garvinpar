<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Config\Monolog\HandlerConfig\PublisherConfig;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class FormLogSuperAdmin extends AbstractType
{
  public function buildLogSuperAdmin(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('username', TextType::class, [
        'label' => 'Nom d\'utilisateur',
      ])
      ->add('password', PasswordType::class, [
        'label' => 'Mot de passe',
      ])
      ->add('submit', SubmitType::class, [
        'label' => 'Valider',
      ]);
  }


  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      // Configure your form options here
    ]);
  }



  //   public function loginError(Request $request, AuthenticationUtils $authenticationUtils): Response
  //   {
  //     // get the login error if there is one
  //     $error = $authenticationUtils->getLastAuthenticationError();
  //     // last username entered by the user
  //     $lastUsername = $authenticationUtils->getLastUsername();

  //     return $this->render('error/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
  //   }
  // }
  // Path: src/Form/FormCreateCar.php
}
