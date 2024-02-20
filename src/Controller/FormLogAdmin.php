<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


// class FormLogAdmin extends AbstractType
// {
//   public function buildLogAdmin(FormBuilderInterface $builder, array $options)
//   {
//     $builder
//       ->add('username', TextType::class, [
//         'label' => 'Nom d\'utilisateur',
//       ])
//       ->add('password', PasswordType::class, [
//         'label' => 'Mot de passe',
//       ])
//       ->add('submit', SubmitType::class, [
//         'label' => 'Valider',
//       ]);
//   }


//   public function configureOptions(OptionsResolver $resolver)
//   {
//     $resolver->setDefaults([
//       // Configure your form options here
//     ]);
//   }
// }
