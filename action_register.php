<?php
include("navbar.php");
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["passw"];
include("connect.php");
$result = mysqli_query($a, "INSERT INTO `user`(`name`, `username`, `email`, `password`,`admin`) VALUES ('$name','$username','$email','$password',0)");
mysqli_close($a);
if ($result) {
    header("Location: header.php?msg=success");
    exit();
} else {
    header("Location: header.php?msg=error");
    exit();
}
include("footer.php");
?>
