<?php
    //$_GET Global variable contains URL Query String Parameters
    echo "<p>Welcome <b>".$_GET["user"]."</b>!</p>";
    echo "<p>Your message is:<br/><b>".$_GET["message"]."</b></p>";
?>