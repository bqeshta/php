<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP Welcome</title>
  </head>
  <body>
    <div class="container">
        <h1><?php echo "Welcome to PHP" ?></h1> 

        <?php        
         $testing; // declare without assigning
         echo "is null? ".is_null($testing); // checks if null
         echo "<br/>";
         $testing = 5;
         echo "is an integer? ".is_int($testing); // checks if integer
         echo "<br/>";
         $testing = "five";
         echo "is a string? ".is_string($testing); // checks if string
         echo "<br/>";
         $testing = 5.024;
         echo "is a double? ".is_double($testing); // checks if double
         echo "<br/>";
         $testing = true;
         echo "is boolean? ".is_bool($testing); // checks if boolean
         echo "<br/>";
         $testing = array('apple', 'orange', 'pear');
         echo "is an array? ".is_array($testing); // checks if array
         echo "<br/>";
         echo "is numeric? ".is_numeric($testing); // checks if is numeric
         echo "<br/>";
         echo "is a resource? ".is_resource($testing); // checks if is a resource
         echo "<br/>";
         echo "is an array? ".is_array($testing); // checks if is an array
         echo "<br/>";
         ?>
         <h3>Single Double Potation Strings</h3>
         <?php
            $x = "Khaled";
            $y = "Sameer";

            echo "x = \t$x <br/>";
            echo 'x = \t$x <br/>';
         ?>
        <h3>Casting</h3>
        <?php
         $undecided = 3.14;
         $holder = (double) $undecided;
         echo "is $holder a double? ".is_double($holder)."<br/>"; // double
         $holder = (string) $undecided;
         echo "is ".$holder." a string? ".is_string($holder)."<br/>"; // string
         $holder = (integer) $undecided;
         echo "is ".$holder." an integer? ".is_integer($holder)."<br/>"; // integer
         $holder = (double) $undecided;
         echo "is ".$holder." a double? ".is_double($holder)."<br/>"; // double
         $holder = (boolean) $undecided;
         echo "is ".$holder." a boolean? ".is_bool($holder)."<br/>"; // boolean
         echo "<hr/>";
         echo "original variable type of $undecided: ";
         echo gettype($undecided); // double

         //echo "30cm" + "40cm";
         ?>
         <h3>Constants</h3>
        <?php
            define("THE_YEAR", "2019");
            echo "It is the year ".THE_YEAR;
        ?>
        <h3>Control</h3>
        <?php
        $mood = "sad";
        if ($mood == "happy") {
            echo "Hooray, I'm in a good mood!";
        } else if ($mood == "sad") {
            echo "Awww. Don't be down!";
        } else {
            echo "Neither happy nor sad but $mood.";
        }
         ?>

        <h3>Nested For</h3>
        <?php
        echo "<table class='table table-striped table-bordered'><tbody> \n";
        for ($y=1; $y<=12; $y++) {
           echo "<tr> \n";
           for ($x=1; $x<=12; $x++) {
                echo "<td>";
                echo ($x * $y);
                echo "</td> \n";
           }
           echo "</tr> \n";
         }
         echo "</tbody></table>";
         ?>
        <h3>PHP HTML Block Control</h3>
        <?php
            $display_prices = true;
            if ($display_prices) {
                echo "<table border=\"1\" cellpadding=\"4\" cellspacing=\"4\">\n";
                echo "<tr><td colspan=\"3\">";
                echo "today's prices in dollars";
                echo "</td></tr>";
                echo "<tr><td>\$14.00</td><td>\$32.00</td><td>\$71.00</td></tr>\n";
                echo "</table>";
            }
        ?>
        <?php if ($display_prices) { ?>
        <table border="1" cellpadding="4" cellspacing="4">
            <tr><td colspan="3">today's prices in dollars</td></tr>
            <tr><td>$14.00</td><td>$32.00</td><td>$71.00</td></tr>
        </table> 
        <?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
