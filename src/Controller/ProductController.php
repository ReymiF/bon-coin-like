<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProductController extends AbstractController
{

    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/api/product/add", name="add_products", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $name = $data['name'];
        $description = $data['description'];
        $prix = $data['prix'];

        if (empty($name) || empty($description) || empty($prix)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->productRepository->saveProduct($name, $description, $prix );

        return new JsonResponse(['status' => 'Product created!'], Response::HTTP_CREATED);
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
