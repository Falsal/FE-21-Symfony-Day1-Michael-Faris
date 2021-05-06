<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    // #[Route('/random', name: 'random')]
    public function random(): Response
    {

        $number=random_int(1,100);
        

        return $this->render('random/index.html.twig', [
            'controller_name' => 'RandomController', 'randomNumber' => $number
        ]);
    }
}
