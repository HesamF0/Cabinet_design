<?php include("navbar.php"); ?>

<section class="page-section" id="contact">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center my-4">
        <h2 class="alert alert-info" role="alert">لیست سفارشات</h2>
        <hr class="divider" />
      </div>
    </div>

    <?php
    include("connect.php");
    $b = mysqli_query($a, "SELECT * FROM `sellform`");
    mysqli_close($a);
    ?>

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-light">
              <tr>
                <th>نام محصول</th>
                <th>نام کاربری</th>
                <th>متر</th>
                <th>قیمت</th>
                <th>شماره تلفن</th>
                <th>محل زندگی</th>
                <th>ایمیل</th>
                <th>حذف محصول</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($b)) { ?>
              <tr>
                <td><?php echo htmlspecialchars($row["name"]); ?></td>
                <td><?php echo htmlspecialchars($row["username"]); ?></td>
                <td><?php echo htmlspecialchars($row["meter"]); ?></td>
                <td><?php echo htmlspecialchars($row["ghymat"]); ?></td>
                <td><?php echo htmlspecialchars($row["mobile"]); ?></td>
                <td><?php echo htmlspecialchars($row["address"]); ?></td>
                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                <td>
                  <a href="selldelete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف این مورد مطمئن هستید؟')">حذف</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
