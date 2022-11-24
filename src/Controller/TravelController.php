<?php

namespace App\Controller;

class TravelController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Travel/index.html.twig');
    }
}
