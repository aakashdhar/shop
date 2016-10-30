<?php include '../core/init.php'; include 'includes/header.php';?>
<style>
  body{
    padding-top: 70px;;
  }
</style>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 class="panel-title text-center">Add Product</h2>
          </div>
          <div class="panel-body">
            <form class="" action="_addproduct.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Enter Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="enter product name" required>
              </div>
              <div class="form-group">
                <label for="description">Enter Product description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="enter product description" required>
              </div>
              <div class="form-group">
                <label for="cost">Enter Product cost:</label>
                <input type="text" class="form-control" id="cost" name="cost" placeholder="enter product cost" required>
              </div>
              <div class="form-group">
                <label for="quantity">Enter Product quantity:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="enter product quantity" required>
              </div>
              <div class="form-group">
                <label for="photo">Enter Product image:</label>
                <input type="file" class="form-control" id="photo" name="photo">
              </div>
              <div class="form-group">
                <input type="submit" class="form-control btn btn-success" id="add" name="add" value="Add product to cart">
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php include 'includes/footer.php'; ?>
