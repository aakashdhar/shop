<?php include 'includes/header.php'; ?>

<?php

  $total = $_SESSION['total'];
  $item = $_SESSION['shopping_cart'];
  $status = "pending";

  $json = json_encode($item);

  $sql = "INSERT INTO `orders`(`user_id`, `products`, `total`, `status`) VALUES
          (1,'$json','$total','$status')";

  $result = mysqli_query($con,$sql);

  if ($result) {
    unset($_SESSION['shopping_cart']);
    unset($_SESSION['total']);
    header('location: index.php');
  }else {
    echo "failed";
  }
 ?>
