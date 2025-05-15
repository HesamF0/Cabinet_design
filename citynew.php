<?php
include("navbar.php")
?>
<section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
<form action="citynew2.php" method="POST" enctype="multipart/form-data"></br>
<div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام محصول" name="name" required><br>
                                <label for="name">نام محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                                                        <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن قیمت محصول" name="ghymat" required><br>
                                <label for="ghymat">قیمت محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A price is required.</div>
                            </div>
                                                        <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن کد محصول" name="id" required><br>
                                <label for="id">کد محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A code is required.</div>
                            </div>
                                                        <div class="form-floating mb-3">
                                <input class="form-control" type="file" placeholder="وارد کردن عکس محصول" name="image" required><br>
                                
                                <div class="invalid-feedback" data-sb-feedback="name:required">A image is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن توضیحات محصول" name="explane" required><br>
                                <label for="explane">توضیحات محصول</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A explane is required.</div>
                            </div>
                             <button class="btn btn-primary" type="submit">اضافه کردن محصول</button>
</form>
                </div>
            </div>
</section>
<?php
include("footer.php");
?>


