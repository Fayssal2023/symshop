<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductController
{
    private $client;
    
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    
    #[Route('/api/products', name: 'get_products')]
    public function getProducts(): JsonResponse
    {
        try {
            $response = $this->client->request('GET', 'https://fakestoreapi.com/products');
            $data = $response->toArray();
            return new JsonResponse($data);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}