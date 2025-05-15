<?php include("navbar.php") ?>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">ورود به حساب کاربری</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">لطفا اطلاعات را با دقت وارد کنید</p>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <form action="login_action.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام کاربری" name="username1" required><br>
                                <label for="username1">نام کاربری</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن رمز عبور" name="passw" required><br>
                                <label for="passw">رمز عبور</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit">وارد شدن به حساب کاربری</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>

<?php
include("footer.php"); 
?>