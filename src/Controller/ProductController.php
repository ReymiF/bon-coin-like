<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProductController extends AbstractController
{

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

    /**
     * @Route("/api/product/create", name="create-product", methods={"POST"})
     *
     */
   public function createProduct(ValidatorInterface $validator) :Response {
       $entityManager = $this-> getDoctrine()->getManager();

       $product = new Product();
       $product -> setName("Yamaha 250yz 2019");
       $product -> setDescription("Moto cross Yamaha 250 yz de 2019");
       $product -> setPrix(3800);


       $errors = $validator->validate($product);
       if (count($errors) > 0) {
           return new Response((string) $errors, 400);
       }
       $entityManager -> persist($product);
       $entityManager -> flush();
       return new Response('Saved new product with id '.$product->getId());
   }
}
