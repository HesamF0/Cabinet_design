<?php include("navbar.php")?>
<?php
$id = $_GET["id"];
include("connect.php");
if (!$a) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT imageurl FROM product WHERE id = $id";
$result = mysqli_query($a, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $fileurl = $row["imageurl"];
    if (!empty($fileurl) && file_exists($fileurl)) {
        $delete = unlink($fileurl);
        if ($delete) {
            $delete_query = "DELETE FROM product WHERE id = $id";
            $delete_result = mysqli_query($a, $delete_query);
            if ($delete_result) {
                echo "<script>
                        location.replace('modiriat.php');
                      </script>";
            } else {
                echo "خطا در حذف رکورد از پایگاه داده";
            }
        } else {
            echo "خطا در حذف تصویر";
        }
    } else {
        echo "تصویر موجود نیست یا مسیر اشتباه است";
    }
} else {
    echo "خطا در دریافت اطلاعات تصویر";
}
mysqli_close($a);
?>
<?php
include("footer.php");
?>
