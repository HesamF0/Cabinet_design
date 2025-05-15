<?php
include("headerr.php");
?>
 <div class="row">
    <div class="col">
    <form action="newcity_action.php" method="POST"></br>
</br>
</br>
<p>نام:</p>
    <input type="text" name="name">
       <p>قیمت بر متر مربع:</p>
    <input type="text" name="ghymat">
    <p>کد محصول:</p>
    <input type="text" name="id">
    <p> عکس محصول :</p>
    <input type="file" name="image">
    <input type="submit" value="اضافه کردن" class="card">
</form>   
    </div>
</div>
