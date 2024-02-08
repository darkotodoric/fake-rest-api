<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/users', methods: ['GET'])]
    public function users(KernelInterface $kernel): JsonResponse
    {
        $users = json_decode(file_get_contents($kernel->getProjectDir() . '/data/users.json'), true);
        return $this->json($users);
    }

    #[Route('/users', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        return $this->json([
            'success' => true,
        ]);
    }

    #[Route('/users/{id}', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function details(KernelInterface $kernel, int $id): JsonResponse
    {
        $users = json_decode(file_get_contents($kernel->getProjectDir() . '/data/users.json'), true);

        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $this->json($user);
            }
        }

        throw $this->createNotFoundException('User not found');
    }

    #[Route('/users/{id}', methods: ['DELETE'], requirements: ['id' => '\d+'])]
    public function delete(KernelInterface $kernel, int $id): JsonResponse
    {
        $users = json_decode(file_get_contents($kernel->getProjectDir() . '/data/users.json'), true);

        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $this->json([
                    'success' => true,
                ]);
            }
        }

        throw $this->createNotFoundException('User not found');
    }
}