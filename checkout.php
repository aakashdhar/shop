<?php include 'includes/header.php'; include 'includes/nav.php'; ?>

<?php

  $item = $_SESSION['shopping_cart'];
  $total = 0;
  $sub_total = 0;
?>

<div class="container">
  <div class="row">
    <table class="table table-bordered table-hover">
      <thead>
        <th>Name</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>Total</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php foreach($item as $key): ?>
          <tr>
            <td><?= $key['item_name'] ?></td>
            <td><?= $key['item_quantity'] ?></td>
            <td><?= number_format($key['item_cost'],2) ?></td>
            <?php
              $total = ($key['item_quantity'] * $key['item_cost']);
              $sub_total += $total;
            ?>
            <td><?= number_format($total,2) ?></td>
            <td><a href="checkout.php?action=remove&id=<?= $key['item_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Remove</a></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <?php $_SESSION['total'] = (int)$sub_total; ?>
          <td colspan="3">Total</td>
          <td><?= number_format($sub_total,2) ?></td>
          <td><a href="billing.php" class="form-control btn btn-success">Billing</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
