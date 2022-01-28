<h1>Products List</h1>

<p>
  <button href="/products/create.php" class="btn btn-success">Create Product</button>
</p>

<form action="" method="GET">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search for products" name="search" value="<?php echo $search ?>">
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $i => $product): ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><img src="<?php echo $product['image'] ?>" class="thumb-img"></td>
      <td><?php echo $product['title'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['create_date'] ?></td>
      <td>
        <a href="update.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-outline-primary">Edit</a>
        <form method="POST" action="delete.php">
          <input style="display: inline-block;" type="hidden" name="id" value="<?php echo $product['id'] ?>">
          <button type="button" class="btn btn-outline-danger">Delete</button>
        </form>
      </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>