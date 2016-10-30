<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<?php

  $sql = "SELECT * FROM product";
  $result = mysqli_query($con,$sql);

 ?>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="features_items">
          <h2 class="title text-center">Features Items</h2>
          <?php while($row = mysqli_fetch_object($result)): ?>
          <form class="" action="_cart_update.php" method="post">
          <div class="col-md-4">
            <div class="product-image-wrapper">
            	<div class="single-products">
          			<div class="productinfo text-center">
          				<img src="<?= $row -> img?>" alt="" />
          				<h2>Rs.  <?= $row -> cost ?></h2>
          				<p><?= $row -> name ?></p>
                  <select class="form-control" name="quantity" style="margin-bottom: 10px;">
                    <option value="null">Select Quantity</option>
                    <?php for($i = 1; $i <= $row -> quantity; $i++): ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                  <input type="hidden" name="hidden_name" value="<?= $row -> name?>">
                  <input type="hidden" name="hidden_cost" value="<?= $row -> cost ?>">
                  <input type="hidden" name="hidden_id" value="<?= $row -> id ?>">
          				<input type="submit" name="addtocart" style="margin-bottom: 10px;" class="form-control btn btn-success" value="Add to Cart">
          			</div>
            	</div>
            	<div class="choose">
            		<ul class="nav nav-pills nav-justified">
            			<li><a href="#"><i class="fa fa-plus-square"></i>View Product</a></li>
            		</ul>
            	</div>
            </div>
          </div>
          </form>
          <?php endwhile; ?>
        </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
