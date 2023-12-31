<?php
// src/Form/YourFormType.php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class SignatureFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ... other form fields ...
            ->add('signature', SignatureType::class, [
                'label' => 'Signature',
            ]);
    }
}
