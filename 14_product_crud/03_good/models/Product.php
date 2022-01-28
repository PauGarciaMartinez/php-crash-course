<?php

namespace app;

class Product {
  public ?int $id = null;
  public ?string $title = null;
  public ?string $description = null;
  public ?float $price = null;
  public ?string $imagePath = null;
  public ?array $imageFile = null;

  public function load($data) 
  {
    $this->id = $data['id'] ?? null;
    $this->title = $data['title'];
    $this->description = $data['description'] ?? '';
    $this->price = $data['price'];
    $this->imageFile = $data['imageFile'] ?? null;
    $this->imagePath = $data['imagePath'] ?? null;
  }
}