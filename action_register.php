<?php
include("header.php");

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["passw"];

include("connect.php");

// اجرای ثبت‌نام
$result = mysqli_query($a, "INSERT INTO `user`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')");

mysqli_close($a);

// اگر موفقیت‌آمیز بود، انتقال به صفحه با پیام success
if ($result) {
    header("Location: header.php?msg=success");
    exit();
} else {
    header("Location: header.php?msg=error");
    exit();
}
?>
