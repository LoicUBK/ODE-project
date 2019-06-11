<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Nom Complet'])
            ->add('lastname', TextType:: class, ['label' => 'Prénom'])
            ->add('phone', TextType:: class, ['label' => 'Numéro de teléphone'])
            ->add('email', TextType:: class, ['label' => 'Votre email'])
            ->add('message', TextareaType:: class, ['label' => 'Votre message']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
