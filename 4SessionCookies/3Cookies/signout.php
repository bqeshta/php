<?php
     setcookie('username', null);
     setcookie('fullname', 'x', time());
     header("location:login.php");
?>