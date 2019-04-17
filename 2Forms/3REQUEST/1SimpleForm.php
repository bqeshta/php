<?php
    //$_REQUEST Global variable contains Posted or Query String URL Data
    echo "<p>Welcome <b>".$_REQUEST["user"]."</b>!</p>";
    echo "<p>Your message is:<br/><b>".$_REQUEST["message"]."</b></p>";
?>