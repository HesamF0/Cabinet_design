<?php include("navbar.php"); ?>

<?php
$id = $_SESSION["id"];
include("connect.php");
$b = mysqli_query($a, "SELECT * FROM `sellform` WHERE `idk`='$id'");
mysqli_close($a); 
?>

<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center mb-4 mt-3">
                <h2 class='alert alert-info' role='alert'>سبد خرید</h2>
                <hr class="divider" />
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-light">
                            <tr>
                                <th>اسم محصول</th>
                                <th>نام کاربر</th>
                                <th>متراژ</th>
                                <th>قیمت</th>
                                <th>شماره تماس</th>
                                <th>آدرس</th>
                                <th>ایمیل</th>
                                <th>قیمت کل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($b)) { ?>
                            <tr>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["username"]; ?></td>
                                <td><?php echo $row["meter"]; ?></td>
                                <td><?php echo $row["ghymat"]; ?></td>
                                <td><?php echo $row["mobile"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["totalprice"]; ?></td>
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
