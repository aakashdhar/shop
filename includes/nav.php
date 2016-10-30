<?php include 'includes/header.php'; ?>
<div class="header-middle"><!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo pull-left">
            <a href="index.html"><img src="images/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
              <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
              <li><a href="cart.html"><i class="fa fa-shopping-cart"></i><?= count($_SESSION['shopping_cart']) ?> items in Cart</a></li>
              <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-middle-->
