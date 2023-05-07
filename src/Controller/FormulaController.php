<?php

namespace App\Controller;
use App\Service\Formula1Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaController extends AbstractController
{
    #[Route('/', name: 'app_formula')]
    public function index(Formula1Service $formula1Service): Response
    {
        return $this->render('formula/index.html.twig', [
            'formula1s' => $formula1Service->formula1Data()
        ]);
    }
}
