<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

// class FormCreateCar extends AbstractType
// {
//   public function buildCar(FormBuilderInterface $builder, array $options)
//   {
//     $builder
//       ->add('brand', TextType::class, [
//         'label' => 'Marque',
//       ])
//       ->add('model', TextType::class, [
//         'label' => 'Modèle',
//       ])
//       ->add('year', IntegerType::class, [
//         'label' => 'Année',
//       ])
//       ->add('color', TextType::class, [
//         'label' => 'Couleur',
//       ])
//       ->add('kilometers', IntegerType::class, [
//         'label' => 'Kilomètres',
//       ])
//       ->add('price', IntegerType::class, [
//         'label' => 'Prix',
//       ])
//       ->add('sits', IntegerType::class, [
//         'label' => 'Nombre de places',
//       ])
//       ->add('doors', IntegerType::class, [
//         'label' => 'Nombre de portes',
//       ])
//       ->add('fiscalPower', IntegerType::class, [
//         'label' => 'Puissance fiscale',
//       ])
//       ->add('DINPower', IntegerType::class, [
//         'label' => 'Puissance DIN',
//       ])
//       ->add('fuel', TextType::class, [
//         'label' => 'Carburant',
//       ])
//       ->add('gearbox', TextType::class, [
//         'label' => 'Boîte de vitesse',
//       ])
//       ->add('submit', SubmitType::class, [
//         'label' => 'Valider',
//       ]);
//   }
// }
