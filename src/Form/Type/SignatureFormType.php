<?php
// src/Form/YourFormType.php

namespace App\Form;

use App\Form\Type\SignatureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class YourFormType extends AbstractType
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
