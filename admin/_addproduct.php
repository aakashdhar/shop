<?php include '../core/init.php';?>

<?php

  if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $quantity = $_POST['quantity'];
  }
  $target = 'products/';
  $target = $target . basename($_FILES['photo']['name']);

  $targets = '../products/';
  $targets = $targets . basename($_FILES['photo']['name']);

  $tmpname = $_FILES['photo']['tmp_name'];
  move_uploaded_file($tmpname,$targets);

  $sql = "INSERT INTO `product`(`name`, `description`, `img`, `cost`, `quantity`) VALUES
          ('$name','$description','$target','$cost','$quantity')";
  $result = mysqli_query($con,$sql);

  if ($result) {
    header('location: add.php');
  }
 ?>
