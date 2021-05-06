<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(): Response
    {
        $image_1='/images/01.jpg';
        $image_2='/images/02.jpg';
        $image_3='/images/03.jpg';
        $image_4='/images/04.jpg';

        $images = array($image_1, $image_2, $image_3, $image_4);

        return $this->render('test/index.html.twig', [
            'controller_name' => 'controller_test',
             "images"  =>  $images
        ]);
    }
}
