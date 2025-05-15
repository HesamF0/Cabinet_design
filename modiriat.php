<?php include("navbar.php"); ?>
<div class="container my-5">
  <div class="text-center mb-4">
    <br></br>
    <a class="alert alert-success nav-link d-inline-block mb-3" role="alert" href="citynew.php">افزودن محصول</a>
    <h2 class="alert alert-success" role="alert">لیست محصولات</h2>
    <hr class="divider" />
  </div>
</div>

  <div class="row">
    <?php
    include("connect.php");
    $b = mysqli_query($a, "SELECT * FROM `product`");
    mysqli_close($a);

    while ($row = mysqli_fetch_array($b)) {
    ?>
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card h-100">
          <img src="<?php echo $row["imageurl"]; ?>" class="card-img-top" alt="تصویر محصول">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
            <p class="card-text"><?php echo $row["explane"]; ?></p>
            <p class="card-text mt-auto"><small class="text-muted">قیمت: <?php echo $row["ghymat"]; ?></small></p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <a href="cityedit.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary">ویرایش</a>
            <a href="citydelete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger">حذف</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php include("footer.php"); ?>
