<?php
include("header.php");
unset($_SESSION["login"]);
unset($_SESSION["admin"]);
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php

include("footer.php");
?>