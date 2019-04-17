<?php
    //$_POST Global variable contains Posted Data
    echo "<p>Welcome <b>".$_POST["user"]."</b>!</p>";
    echo "<p>Your Password is:<br/><b>".$_POST["password"]."</b></p>";
    echo "<p>Remeber Me:<br/><b>".$_POST["remember_me"]."</b></p>";
    /*if(isset($_POST["remember_me"]))
    {
        echo "<p>Remeber Me:<br/><b>".$_POST["remember_me"]."</b></p>";
    }*/
?>