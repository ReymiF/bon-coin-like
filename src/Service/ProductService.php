<?php


namespace App\Service;


use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductService
{

    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function findAll(): JsonResponse
    {
        $products = $this->productRepository->findAll();
        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'prix' => $product->getPrix()

            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    }

    public function get($id): JsonResponse
    {
        $product = $this->productRepository->findOneBy(['id' => $id]);

        $data[] = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'prix' => $product->getPrix()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }
}