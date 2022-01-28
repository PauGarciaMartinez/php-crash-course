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
    $productData = [
      'title' => '',
      'description' => '',
      'image' => '',
      'price' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $productData['title'] = $_POST['title'];
      $productData['description'] = $_POST['description'];
      $productData['price'] = $_POST['price'];
      $productData['imageFile'] = $_POST['image'];

      $product = new Product();
      $product->load($productData);
      $errors = $product->save();

      if (empty($errors)) {
        header('Location: /products');
      }
    }

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
    $id = $_POST['id'] ?? null;
    if (!$id) {
      header('Location: /products');
    }
    $router->db->deleteProduct($id);
  }
}