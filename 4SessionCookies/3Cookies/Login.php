<?php 
    $msg = "";
    if(isset($_POST["username"])){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if($username=='aa' && $password=='aa'){
            //بنخزن في الكوكيز معلومات 
            //طالما لم نحدد عمر للكوكي تعتبر سيشن كوكي
            //وتنتهي باغلاق الجلسة
            setcookie('username','aa', time()+60*60*24*14);
            setcookie('fullname','Ahmed Ali Othman', time()+60*60*24*14);

            header("location:secure.php");
        }
        else{
            $msg = "Invalid Username or Password";
        }
    }
 ?>

<html>
    <head>
        <title>Cookies Login Page</title>
    </head>
    <body>
        <h1>Cookies Login Page</h1>
        <span style="color:red"><?php echo $msg; ?></span>
        <form method="POST">
            <p><strong>Username:</strong>
            <input autocomplete="off" type="text" name="username" /></p>
            <p><strong>Password:</strong>
            <input type="password" name="password" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
    </body>
</html>