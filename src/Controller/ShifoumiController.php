<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShifoumiController extends AbstractController
{
    /**
     * @Route("/shifoumi", name="shifoumi")
     */
    public function index(): Response
    {
        return $this->render('shifoumi/index.html.twig', [
            'controller_name' => 'ShifoumiController',
        ]);
    }
}
