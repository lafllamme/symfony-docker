<?php
namespace App\Controller;

use App\Form\Type\SignatureFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\Type\OrderType;


class DefaultController extends AbstractController {

#[Route('/lucky/number/{max}', name: 'app_lucky_number')]
public function number(int $max): Response {
    $number = random_int(0, $max);

    return $this->render('luckynumber.html.twig', [
        'number' => $number,
    ]);
 }

#[Route('/test', name: 'test', methods: ['GET', 'POST'])]
public function test(Request $request): Response {
    // Create an instance of the OrderType form
    $form = $this->createForm(OrderType::class);

    // Handle form submissions
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Process the form data, e.g., save it to the database
        dd($form->getData());
    }

    // Render the form in your template
    return $this->render('test.html.twig', [
        'form' => $form->createView(),
    ]);
 }

#[Route('/signature', name: 'signature', methods: ['GET', 'POST'])]
// Handle form submission and access the signature data
public function submitForm(Request $request)
{
    $form = $this->createForm(SignatureFormType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $signatureData = $form->get('signature')->getData();

        // Process the signature data as needed (e.g., save it to a database)
    }

    // Render the form in your template
    return $this->render('signature.html.twig', [
        'form' => $form->createView(),
    ]);

    // ...
}
}
