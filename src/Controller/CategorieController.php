<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class CategorieController extends AbstractController
{
    #[Route('/categorie/', name: 'categorie_list')]
    public function index(): Response
    {
        return $this->render('categories/categorie.html.twig', [
            'Categorie' => 'Listes des catégories',
        ]);
    }
    
}

