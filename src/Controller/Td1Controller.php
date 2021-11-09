<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Td1Controller extends AbstractController
{
    /**
     * @Route("/td1", name="td1")
     */
    public function index(): Response
    {
        return $this->render('td1/index.html.twig', [
            'controller_name' => 'Td1Controller',
        ]);
    }
}
