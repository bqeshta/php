<?php 
    if(!isset($_COOKIE["username"])){
        header("location:login.php");
    }
?>
<html>
    <head>
        <title>Secure Page</title>
    </head>
    <body>
        <h1 style="color:red">Secure Page</h1>
        Welcome <b><?php echo $_COOKIE["fullname"] ?></b>
        <br>
        <br>
        <a href="signout.php">Sign out</a>
    </body>
</html>