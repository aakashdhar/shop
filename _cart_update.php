<?php include 'includes/header.php'; ?>


<?php
if (isset($_POST['addtocart'])) {
  if (isset($_SESSION['shopping_cart'])) {
    $count = count($_SESSION['shopping_cart']);
    $item_array = array(
      'item_id' => $_POST['hidden_id'],
      'item_name' => $_POST['hidden_name'],
      'item_cost' => $_POST['hidden_cost'],
      'item_quantity' => $_POST['quantity']
    );
    $_SESSION['shopping_cart'][$count] = $item_array;
    header('location: index.php');
  } else {
    $item_array = array(
      'item_id' => $_POST['hidden_id'],
      'item_name' => $_POST['hidden_name'],
      'item_cost' => $_POST['hidden_cost'],
      'item_quantity' => $_POST['quantity']
    );
    $_SESSION['shopping_cart'][0] = $item_array;
    header('location: index.php');
  }
}
echo "<pre>";
print_r($_SESSION['shopping_cart']);
echo "</pre>";
?>
