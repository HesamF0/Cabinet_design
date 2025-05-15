<?php include("navbar.php"); ?>
<header class="masthead pt-5 mt-5">
  <div class="container px-4 px-lg-5">
    <?php
    if (isset($_GET['msg'])):
        $msgType = ($_GET['msg'] === 'success') ? 'success' : 'danger';
        $msgText = ($_GET['msg'] === 'success') 
            ? 'ساخت حساب کاربری با موفقیت انجام شد' 
            : 'نام کاربری یا رمز عبور اشتباه است';
    ?>
      <div class="row justify-content-center mb-4">
        <div class="col-lg-6">
          <div class="alert alert-<?php echo htmlspecialchars($msgType); ?> text-center" role="alert">
            <?php echo $msgText; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <hr class="divider" />
        <a class="btn btn-primary btn-xl" href="index.php">بازگشت به صفحه اصلی</a>
      </div>
    </div>

  </div>
</header>
</body>
</html>
<?php include("footer.php"); ?>