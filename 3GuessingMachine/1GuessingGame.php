 <?php
 $num_to_guess = 42;
 if (!isset($_POST["guess"])) {// New visitor to Page
    $message = "Welcome to the guessing machine!";
 } else if ($_POST["guess"] > $num_to_guess) {
    $message = $_POST["guess"]." is too big! Try a smaller number.";
 } else if ($_POST["guess"] < $num_to_guess) {
    $message = $_POST["guess"]." is too small! Try a larger number.";
 } else { // must be equivalent
   $message = "Well done!";
 }
 ?>

<html>
    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
        <h1><?php echo $message; ?></h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; //اسم الصفخة التي نحن بها ?>" method="POST">
            <p><strong>Type your guess here:</strong>
            <input type="text" name="guess" /></p>
            <p><input type="submit" value="submit your guess" /></p>
        </form>
    </body>
</html>