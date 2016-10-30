<?php include 'includes/header.php'; ?>
<?php
  $sql = "SELECT * FROM `orders`";
  $result = mysqli_query($con,$sql);
 ?>
<div class="container">
  <div class="row">
    <table class="table table-bordered table-hover">
      <thead>
        <th>Cart id</th>
        <th>user id</th>
        <th>Products | quantity</th>
        <th>total</th>
        <th>status</th>
        <th>action</th>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_object($result)): ?>
          <?php $json = json_decode($row -> products,true) ?>
          <tr>
            <td><?= $row -> id ?></td>
            <td><?= $row -> user_id ?></td>
            <td>
            <?php foreach ($json as $key): ?>
              <ul>
                <li><?= $key['item_name'] ?> | <?= $key['item_quantity'] ?></li>
              </ul>
            <?php endforeach; ?>
            </td>
            <td><?= $row -> total ?></td>
            <td><?= $row -> status ?></td>
            <td><a href="complete.php?id=<?= $row -> id ?>" class="btn btn-info">Update</a></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
