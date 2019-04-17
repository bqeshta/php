<?php session_start();
     session_destroy();//محي جميع البيانات في السيشن
     header("location:login.php");
?>