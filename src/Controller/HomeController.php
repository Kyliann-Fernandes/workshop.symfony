<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SquirrelRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirrelRepository): Response
    {
        $squirrels = $squirrelRepository->findAll();
        return $this->render('home/index.html.twig', ['squirrels'=>$squirrels]);
    }
}
