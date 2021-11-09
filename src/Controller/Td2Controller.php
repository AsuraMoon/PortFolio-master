<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Td2Controller extends AbstractController
{
    /**
     * @Route("/td2", name="td2")
     */
    public function index(): Response
    {
        return $this->render('td2/index.html.twig', [
            'controller_name' => 'Td2Controller',
        ]);
    }
}
