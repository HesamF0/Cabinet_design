<?php include("navbar.php") ?>
<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>ساخت حساب کاربری</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<header class="masthead">
  <div class="container px-4 px-lg-5 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h1 class="text-white font-weight-bold">ساخت حساب کاربری</h1>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 mb-5">لطفا اطلاعات را با دقت وارد کنید</p>
      </div>
      <div class="col-lg-8 align-self-baseline">
        <form action="action_register.php" method="post">
          <div class="form-floating mb-3">
            <input class="form-control" type="text" placeholder="وارد کردن نام کاربری" name="username" required>
            <label for="username">نام کاربری</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="text" placeholder="وارد کردن نام" name="name" required>
            <label for="name">نام کامل</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="email" placeholder="وارد کردن ایمیل" name="email" required>
            <label for="email">ایمیل</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="password" placeholder="وارد کردن رمز عبور" name="passw" required>
            <label for="passw">رمز عبور</label>
          </div>
          <button class="btn btn-primary" type="submit">ساخت حساب کاربری</button>
        </form>
      </div>
    </div>
  </div>
</header>

<?php include("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
