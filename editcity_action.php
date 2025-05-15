<?php
include("headerr.php");
$id=$_POST["id"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"UPDATE `mdf` SET `name`='$name',`ghymat`='$ghymat' WHERE `id`='$id';");
mysqli_close($link);
?>
 <div class="row">
    <div class="col">
        <?php
        if($result===true)
        {
            ?>
            <script>
                location.replace("indexx.php");
            </script>
            <?php
        }else
        {
            echo("EROR");
        }
        ?>
    </div>
</div>
