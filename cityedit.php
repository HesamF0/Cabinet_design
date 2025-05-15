<?php
include("navbar.php");
?>
<?php
$id=$_GET["id"];
include("connect.php");

$b=mysqli_query($a,"SELECT * FROM `product` WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b);
?>
<section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
<form action="cityedit_action.php" method="POST" enctype="multipart/form-data"></br>
<div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام محصول" name="name" value="<?php echo($row["name"]);?>"><br>
                                <label for="name">نام محصول</label>
                            </div>
        <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن قیمت محصول" name="ghymat" value="<?php echo($row["ghymat"]);?>"><br>
                                <label for="name">قیمت محصول </label>
                            </div>
    <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن کد محصول" name="id" value="<?php echo($row["id"]);?>"><br>
                                <label for="name">کد محصول</label>
                            </div>
    <div class="form-floating mb-3">
                                <input class="form-control" type="file" placeholder="وارد کردن عکس محصول" name="image" value="<?php echo($row["imageurl"]);?>"><br>
                            </div>
    <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن توضیحات محصول" name="explane" value="<?php echo($row["explane"]);?>"><br>
                                <label for="name">توضیحات محصول</label>
                            </div>
     <button class="btn btn-primary" type="submit">ویرایش محصول</button>
</form>
                </div>
            </div>
</section>
<?php
include("footer.php");
?>


