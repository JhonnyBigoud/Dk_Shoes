<?php

class ShopController extends Controller
{
    public function display()
    {
        $productModel = new Product();
        
        $products = $productModel->getProducts();

        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/index.php';
    }

    public function displayCategory(array $parameters)
    {
        $idCategory = $parameters['id'];
        $productModel = new Product();
        $products = $productModel->getProductsByCategory($idCategory);

        $categories = $this->getCategories();

        include '../' . VIEW_DIRECTORY . '/category.php';
    }
}