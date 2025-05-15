<?php
include("header2.php");
?>
<?php
 session_start();
    $username=$_POST["username1"];
    $password=$_POST["passw"];
    include("connect.php");
    $result=mysqli_query($a," SELECT * FROM `user` WHERE 
    `username` = '$username' AND `password` = '$password';");
    $row=mysqli_fetch_array($result);
    mysqli_close($a);
    if ($row) {
        header("Location: header3.php?msg=success");
        $_SESSION["login"] = true;
        $_SESSION["admin"]=$row["admin"];
        $_SESSION["id"]=$row["id"];
    } else {
        header("Location: header3.php?msg=error");
    }
    exit();
?>
<?php
include("footer.php");
?>


