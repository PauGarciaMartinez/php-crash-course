<?php

namespace app;

use app\Router;

class ProductController {
  public function index($router) 
  {
    $search = $_GET['search'] ?? '';
    $products = $router->db->getProducts($search);
    $router->renderView('products/index', [
      'products' => $products,
      'search' => $search
    ]);
  }

  public function create(Router $router) 
  {
    $errors = [];
    $product = [
      'title' => '',
      'description' => '',
      'image' => '',
      'price' => ''
    ];
    $router->renderView('products/index', [
      'product' => $product,
      'errors' => $errors
    ]);
  }

  public function update() 
  {
    echo "Update page";
  }

  public function delete() 
  {
    echo "Delete page";
  }
}