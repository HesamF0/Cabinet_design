<?php
include("navbar.php")
?>
<?php
$id=$_GET["id"];
include("connect.php");
$b=mysqli_query($a,"DELETE FROM `sellform` WHERE `id`=$id");
mysqli_close($a);
?>
<?php

if($b===true)
{
    
 ?>
 
    <script>
    location.replace("sellform_panel.php");
 </script>   
  
 <?php

}

include("footer.php");
?>
