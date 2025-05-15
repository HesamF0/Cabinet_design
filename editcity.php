<?php
$id=$_GET["id"];
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"SELECT * FROM `mdf` WHERE `id`='$id';");
mysqli_close($link);
$row=mysqli_fetch_array($result);
include("headerr.php");
?>
 <div class="row">
    <div class="col">
    <form action="editcity_action.php" method="post">
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form> 
    </div>
</div>

