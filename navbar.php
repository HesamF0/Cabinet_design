<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>طراحی و ساخت کابینت آشپزخانه</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" type="image/x-icon" href="assets/1.ico" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="list.css" rel="stylesheet" />
        
        <?php 
        session_start();
        ?>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-dark-subtle fixed-top py-3 nav"  id="mainNav">
            <div class="container px-4 px-lg-5" >
                <a class="navbar-brand"  href="index.php">طراحی دکوراسیون آشپزخانه</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <?php if(isset($_SESSION["login"])){ ?>
                          <li class="nav-item">
                           <a class="nav-link " href="logout.php"> خروج از حساب کاربری</a>
                          </li>
                          <li class="nav-item"><a class="nav-link" href="sabad_kharid.php"> سبد خرید  </a></li>
                          <li class="nav-item"><a class="nav-link" href="#fo">درباره ما</a></li>
                          <?php } else { ?>
                            <li class="nav-item"><a class="nav-link" href="register.php">ساخت حساب کابری</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">ورود به حساب کابری</a></li>
     
                           <?php } ?>
                           <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                <li class="nav-item"><a class="nav-link " href="modiriat.php">مدیریت محصولات</a></li>
                <li class="nav-item"><a class="nav-link " href="sellform_panel.php"> لیست سفارشات</a></li>
            <?php }else{
                
            } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>