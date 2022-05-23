<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('//', name: 'app_index')]
    public function index(): Response
    {
        return new Response(
            '<html><body><h1>Bienvenue !</h1></body></html>'
        );
    }
}