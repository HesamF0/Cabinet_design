
<?php
include("navbar.php");
$id = $_POST["id"];
$name = $_POST["name"];
$ghymat = $_POST["ghymat"];
$explane = $_POST["explane"];
$image = 0;

if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
    $image = $_FILES["image"]["name"];
    $imageurl = "assets/" . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $imageurl);
} else {
    include("connect.php");
    $b = mysqli_query($a, "SELECT imageurl FROM `product` WHERE `id` = $id");
    $row = mysqli_fetch_array($b);
    $imageurl = $row["imageurl"];
    mysqli_close($a);
}

include("connect.php");
$query = "UPDATE `product` SET `name` = '$name', `ghymat` = '$ghymat', `imageurl` = '$imageurl', `explane` = '$explane' WHERE `id` = $id";
$b = mysqli_query($a, $query);
mysqli_close($a);

if ($b) {
    echo "<script>location.replace('modiriat.php');</script>";
} else {
    echo "خطا در به‌روزرسانی اطلاعات";
}
?>
<?php
include("footer.php");
?>