<?php
include("headerr.php");

$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"SELECT * FROM `mdf`");
mysqli_close($link);
?>
<div class="row">
    <div class="col">
    <button><a href="newcity.php">+ اضافه کردن محصول جدید</a></button>
    <span id="matn">لیست محصولات جهت تغییر</span>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row">
    <div class="col">
        <button><a href="editcity.php?id=<?php echo($row["id"]); ?>" id="n2">edit</a></button>
        <button><a href="deletecity.php?id=<?php echo($row["id"]); ?>" id="n1">delete</a></button>
        <span>
            <?php echo($row["name"]);  ?>
        </span>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>
