<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ClientsController
{
   #[Route('/v1/clients')]
    public function number(): Response
    {
        $response = 'teste';
        return new JsonResponse([$response]);
    }
}