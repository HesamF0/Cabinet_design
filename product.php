<?php include("navbar.php"); ?>
<?php include("connect.php"); ?>
<br></br>
<section class="page-section py-5">
  <div class="container">
    <div class="row text-center mb-4">
      <h2 class="alert alert-info">محصولات</h2>
    </div>

    <div class="row g-4">
      <?php
      $result = mysqli_query($a, "SELECT * FROM `product`");
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100 shadow-sm">
            <a href="sellform.php?id=<?php echo $row['id']; ?>">
              <img src="<?php echo $row['imageurl']; ?>" class="card-img-top img-fluid" alt="محصول">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text"><?php echo nl2br(htmlspecialchars($row['explane'])); ?></p>
              <a href="sellform.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-3">سفارش محصول</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>
