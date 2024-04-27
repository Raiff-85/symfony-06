<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/')]
    public function index(): Response
    {
        $pageTitle = "Sistema de Notícias";
        return $this->render('home.html.twig', [
            'pageTitle' => $pageTitle,
        ]);
    }

    #[Route('/categoria')]
    public function categoria(): Response
    {
        $pageTitle = "Notícias";
        return $this->render('categoria.html.twig', [
            'pageTitle' => $pageTitle,
        ]);
    }
}