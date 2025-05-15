<?php
include("navbar.php")
?>
<header class="masthead">
            <div class="form-floating mb-3">
                          <?php
                          if (isset($_GET['msg'])): 
                          ?>
                          <div class="alert alert-<?php echo ($_GET['msg'] == 'success' ? 'success' : 'danger'); 
                          ?> text-center" role="alert">
                          <?php
                          echo ($_GET['msg'] == 'success' ? 'ورود موفقیت‌آمیز بود' : 'نام کاربری یا رمز عبور اشتباه است'); 
                          ?>
                        </div>
            </div>
                 <?php 
                 endif; 
                 ?>
                 <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <hr class="divider" />
                        <a class="btn btn-primary btn-xl" href="index.php">بازگشت به صفحه اصلی</a>
                    </div>
                </div>
            </div>
        </header>
        <?php
include("footer.php")
?>

        