<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
{
    #[Route('/headers', methods: ['GET'])]
    public function headers(Request $request): JsonResponse
    {
        return $this->json($request->headers->all());
    }
}