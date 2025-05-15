<?php include("navbar.php") ?>
<section class="page-section" id="contact">
<?php
if(isset($_SESSION["login"]) && $_SESSION["login"]==true){ 
}else{
  header("Location: login.php");
  exit(); 
}
$id=$_GET["id"];
include("connect.php");
$b=mysqli_query($a,"SELECT * FROM `product` WHERE `id`=$id;");
mysqli_close($a);
$row=mysqli_fetch_array($b);
            while($row)
            {
            ?>
</br>
<div>

            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">

                        <h1 class="text-dark font-weight-bold">فرم خرید محصول</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-dark-75 mb-5">لطفا با دقت اطلاعات را وارد کنید</p>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    <form action="sellform_actoin.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="نام محصول" id="name" name="name" value= <?php echo($row["name"]);?>  readonly><br>
                                <label for="username1">نام محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="قیمت محصول" id="ghymat" name="ghymat" value= <?php echo($row["ghymat"]);?>  readonly><br>
                                <label for="passw">قیمت محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <?php
                              $row=mysqli_fetch_array($b);
            }
            ?>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" placeholder="(متر مربع)ابعاد" id="meter"  name="meter" required oninput="TotalPrice()"><br>
                                    <label for="passw">ابعاد متر مربع</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder=" قیمت کل  " id="totalPrice" name="totalprice" required  readonly><br>
                                <label for="passw">قیمت کل </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="نام و نام خانوادگی" name="username" required><br>
                                <label for="passw"> نام و نام خانوادگی</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="شماره تماس " name="mobile" required><br>
                                <label for="passw"> شماره تماس</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="ادرس محل زندگی" name="address" required><br>
                                <label for="passw"> ادرس محل زندگی</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder=" ایمیل" name="email" required><br>
                                <label for="passw"> ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit">ثبت سفاش</button>
                        </form>
                        <script>
  function TotalPrice() {
    var price = parseFloat(document.getElementById("ghymat").value); 
    var meter = parseFloat(document.getElementById("meter").value);

    if (!isNaN(price) && !isNaN(meter)) {
      var total = price * meter;  
      document.getElementById("totalPrice").value = total.toFixed(0);  
    } else {
      document.getElementById("totalPrice").value = ''; 
    }
  }
</script>
                    </div>
                </div>
            </div>
</div>
</section>
<?php include("footer.php") ?>