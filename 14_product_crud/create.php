<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = [];
$title = '';
$description = '';
$price = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $date = date('Y-m-d H:i:s');

  if (!$title) {
    $errors[] = 'Product title is required';
  }
  if (!$price) {
    $errors[] = 'Price is required';
  }

  if (empty($errors)) {
    $statement = $pdo->prepare("
      INSERT INTO products (title, image, description, price, create_date)
      VALUES (:title, :image, :description, :price, :date)
    ");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./app.css">

    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Create new product</h1>

    <?php if (!empty($errors)): ?>
      <div class="alert-danger">
      <?php foreach ($errors as $i => $error): ?>
        <div><?php echo $error ?></div>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form action="" method="POST">
      <div class="mb-3">
        <label>Product Image</label>
        <br>
        <input type="file" name="image">
      </div>
      <div class="mb-3">
        <label>Product Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
      </div>
      <div class="mb-3">
        <label>Product Description</label>
        <textarea type="text" class="form-control" name="description" value="<?php echo $description ?>">
      </div>
      <div class="mb-3">
        <label>Product Price</label>
        <input type="number" step=".01" class="form-control" name="price" value="<?php echo $price ?>">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
  </body>
</html>