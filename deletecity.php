<?php
include("headerr.html");
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"DELETE FROM `mdf` WHERE `id`='$id';");
mysqli_close($link);

?>
<div class="row">
    <div class="col">
    <script>
        location.replace("indexx.php");
    </script>
    </div>
</div>
