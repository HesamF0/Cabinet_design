<?php
include("navbar.php")
?>
<?php
if (
    isset($_POST["username"], $_POST["meter"], $_POST["mobile"], $_POST["address"], $_POST["email"]) &&
    !empty($_POST["username"]) &&
    !empty($_POST["meter"]) &&
    !empty($_POST["mobile"]) &&
    !empty($_POST["address"]) &&
    !empty($_POST["email"])
) {
    header("Location: index.php");
} else {
    header("Location: sellform_actoin.php");
    exit;
}
?>
<?php
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$username=$_POST["username"];
$meter=$_POST["meter"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$email=$_POST["email"];
$totalprice=$_POST["totalprice"];
$idk=$_SESSION["id"];
include("connect.php");
$b=mysqli_query($a,"INSERT INTO `sellform`(`username`, `meter` ,`ghymat`,`mobile`,`address`,`email`,`name`,`id`,`idk`,`totalprice`) VALUES ('$username','$meter','$ghymat','$mobile','$address','$email','$name','$id','$idk','$totalprice')");
mysqli_close($a);
?>

 <script>
 location.replace("headerr.php");
</script>   

<?php
include("footer.php");
?>
