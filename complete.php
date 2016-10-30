<?php include 'includes/header.php'; ?>

<?php
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM `orders` where `id` = '$id'";
  $result = mysqli_query($con,$sql);

  $row = mysqli_fetch_array($result);
  $json = json_decode($row['products'],true);

  $sql1 = "SELECT `id`, `quantity` FROM `product`";
  $result1 = mysqli_query($con,$sql1);
  $i = 0;
  while ($row1 = mysqli_fetch_array($result1)) {
    $resp[$i]['id'] = $row1['id'];
    $resp[$i]['quantity'] = $row1['quantity'];
    $data['post'][$i] = $resp[$i];
    $i++;
  }
   $item = $data['post'];
  foreach ($json as $key) {
    foreach ($item as $keys) {
      if ($keys['id'] == $key['item_id']) {
        $sql2 = "UPDATE `product` SET `quantity`= ".$keys['quantity']." - ".$key['item_quantity']." WHERE `id` = ".$key['item_id']."";
          //echo "$sql2";
          mysqli_query($con,$sql2);
      }
    }
  }
?>
