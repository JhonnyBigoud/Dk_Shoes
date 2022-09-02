<?php

class Controller {
    protected $categories;

    public function __construct() 
    {
        $categoryModel = new Category();
        $this->categories = $categoryModel->getCategories();
    }

    public function getCategories()
    {
        return $this->categories;
    }
}