<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JavascriptController extends AbstractController
{
    /**
     * @Route("/javascript", name="javascript")
     */
    public function index(): Response
    {
        return $this->render('javascript/index.html.twig', [
            'controller_name' => 'JavascriptController',
        ]);
    }
}
