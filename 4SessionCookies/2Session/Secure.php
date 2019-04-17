<?php session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>
<html>
    <head>
        <title>Secure Page</title>
    </head>
    <body>
        <h1 style="color:red">Secure Page</h1>
        Welcome <b><?php echo $_SESSION["fullname"] ?></b>
        <br>
        <br>
        <a href="signout.php">Sign out</a>
    </body>
</html>