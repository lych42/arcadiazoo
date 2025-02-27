<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\HabitatRepository;

class HabitatsController extends AbstractController
{
    #[Route('/habitats', name: 'habitats')]
    public function index(HabitatRepository $habitatRepository): Response
    {    
        $habitats = $habitatRepository->findAll();
        
        return $this->render('habitats/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }
}
