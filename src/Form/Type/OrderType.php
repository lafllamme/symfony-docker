<?php namespace App\Form\Type;


use App\Form\Type\ShippingType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class OrderType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
$builder
// ...
->add('shipping', ShippingType::class)
;
}

// ...
}
