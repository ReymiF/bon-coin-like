<?php


namespace App\Service;


use App\Repository\ProductRepository;

class ProductService
{

    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }


}