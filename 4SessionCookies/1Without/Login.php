<?php
    $msg = "";
    if(isset($_POST["username"])){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if($username=='aa' && $password=='aa'){
            header("location:secure.php");
        }
        else{
            $msg = "Invalid Username or Password";
        }
    }
 ?>

<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <span style="color:red"><?php echo $msg; ?></span>
        <form method="POST">
            <p><strong>Username:</strong>
            <input type="text" name="username" /></p>
            <p><strong>Password:</strong>
            <input type="password" name="password" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
    </body>
</html>