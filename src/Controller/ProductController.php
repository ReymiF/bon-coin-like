<?php

namespace App\Controller;


use App\Repository\ProductRepository;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{

    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @Route("/api/product/getAll", name= "get-all-products", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $products = $this->productService->findAll();

        return $products;

    }

    /**
     * @Route("/api/product/add", name="add_products", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $products = $this->productService->add($request);

        return $products;
    }

    /**
     * @Route("/api/product/{id}", name="get-product-by-id", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        return $this->productService->get($id);
    }

    /**
     * @Route("/api/product/{id}", name="update_product", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        return $this->productService->update($id, $request);
    }

    /**
     * @Route("/api/product/{id}", name="delete_product", methods={"DELETE"})
     */
    public function deleteProduct($id): JsonResponse
    {
       return $this->productService->deleteProduct($id);
    }


    /**
     * @Route("/api", name="home", methods= {"GET"})
     * @return Response
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductController.php',
        ]);
    }
}
