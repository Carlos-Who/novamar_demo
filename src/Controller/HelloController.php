<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response {
        return $this->render('hello/index.html.twig',[]);
    }
}