<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpectaclesController extends AbstractController
{
    /**
     * @Route("/", name="spectacles")
     */
    public function index()
    {
        return $this->render('spectacles/index.html.twig', [
            'controller_name' => 'SpectaclesController',
        ]);
    }
}
