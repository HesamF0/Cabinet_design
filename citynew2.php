<?php
include("navbar.php")
?>
<?php
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$id=$_POST["id"];
$explane=$_POST["explane"];
$massege="";
$flagsaveok=true;
$image=$_FILES["image"]["name"];
$imageurl="assets/".$image;
if(file_exists($imageurl)){
   $flagsaveok=false;
   $massege.="فایل مشابه در بانک اصلاعاتی وجود دارد";
}
$size=($_FILES["image"]["size"]);
if($size>10*1024*1024){
    $flagsaveok=false;
    $massege.="حجم فایل بیشتر از 50 مگابایت است";
}
$extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extension!="jpg")
{
    $flagsaveok=false;
    $massege.="نوع فایل باید jpg باشد";
}
$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

if($upload==false)
{
    $flagsaveok=false;
    $massege.="در اپلود فایل مشکلی پیش امده است";
}
include("connect.php");

$b=mysqli_query($a,"INSERT INTO `product`(`id`, `name`, `ghymat`, `imageurl` ,`explane` ) VALUES ('$id','$name','$ghymat','$imageurl','$explane')");
mysqli_close($a);
?>
<?php 
if($b===true)
{
 ?>
 <script>
    location.replace("index.php");
 </script>   
 <?php
}else
echo("خطا");
?>



