<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Hello first page');
    }

    /**
     * @Route("/question/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf("Some Show %s", $slug));

    }

}