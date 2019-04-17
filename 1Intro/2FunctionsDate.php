<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>PHP Functions Date String And Arrays</title>
    </head>
    <body>
        <div class="container">
            <h1>PHP Functions Date String And Arrays</h1>
            <?php
            bighello();
            function bighello() {
                echo "<h3>HELLO!</h3>";
            }
            bighello();
            ?>
            <hr>
            <?php
                function printBR($txt) {
                    echo $txt."<br/>";
                }
                printBR("This is a line.");
                printBR("This is a new line.");
                printBR("This is yet another line.");
            ?>
            <h3>Global Variable</h3>
            <?php
                $life = 42;
                function meaningOfLife() {
                    global $life;
                    echo "The meaning of life is ".$life;
                }
                meaningOfLife();
            ?>
            <h3>Optional Parameters</h3>
            <?php
                function fontWrap($txt, $fontsize = "12pt") {
                    echo "<span style=\"font-size:$fontsize\">".$txt."</span>";
                }
                fontWrap("A Heading<br/>","24pt");
                fontWrap("some body text<br/>","18px");
                fontWrap("smaller body text<br/>");
                fontWrap("even smaller body text<br/>");
            ?>
            <h3>Pass by value</h3>
            <?php
                function addFiveValue($num) {
                    $num += 5;
                }
                $orignum = 10;
                addFiveValue($orignum);
                echo $orignum;
            ?>
            <h3>Pass by reference</h3>
            <?php
                function addFiveRef(&$num) {
                    $num += 5;
                }
                $orignum = 10;
                addFiveRef($orignum);
                echo $orignum;
            ?>
            <h1>Arrays</h1>
            <?php
                $rainbow = array("red", "orange", "yellow", "green", "blue", "indigo", "violet");
                $rainbow[] = "Black";
                print_r($rainbow);
                echo "<br>";
                $colors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];
                $colors[] = "Black";
                //print_r($colors);
                echo "<ul>";
                foreach($colors as $color){
                    echo "<li>$color</li>";
                }
                echo "</ul>";
                echo '$colors[4] = ' . $colors[4];
            ?>
            <h4>Associative Arrays</h4>
            <?php
                $character = array(
                    "name" => "Bob",
                    "email" => "b1090@aa.com",
                    "occupation" => "superhero",
                    "age" => 30,
                    "special power" => "x-ray vision"	
                );
                $character["supername"] = "Superman";
                $character['age'] = 38;
                echo '$character["email"] = ' . $character["email"];        
            ?>
            <hr/>
            <?php
                $characters = [
                  [
                    "name" => "Bob",
                    "occupation" => "superhero",
                    "age" => 30,
                    "special power" => "x-ray vision"
                  ],
                  [
                    "name" => "Sally",
                    "occupation" => "superhero",
                    "age" => 24,
                    "special power" => "superhuman strength"
                  ],
                  [
                    "name" => "Jane",
                    "occupation" => "arch villain",
                    "age" => 45,
                    "special power" => "nanotechnology"
                  ]
                ];
                //print_r($characters);
                foreach($characters as $character){
                    foreach($character as $key => $value){
                        echo "$key ... $value<br/>";
                    }
                    /*while (list($key, $value) = each ($character)) {
                        echo "$key ... $value <br/>";
                    }*/
                    echo "<br>";
                }
                //echo $characters[1]["name"];
                echo sizeof($characters);
            ?>
            <h1>Functions</h1>
            <h4>strstr</h4>
            <?php
                $membership = "pAB7";
                echo strstr($membership, "AB");
                if (strstr($membership, "AB")) {
                echo "<p>Your membership expires soon!</p>";
                } else {
                echo "<p>Thank you!</p>";
            }
            ?>
            <h4>strpos</h4>
            <?php
                $membership = "mz00xyz";
                echo strpos($membership, "00");
                if (strpos($membership, "mz")==0) {
                echo "Hello mz!";
            }
            ?>
            <h4>strtok</h4>
            <?php
                $test  = "http://www.google.com/search?";
                $test .= "hl=en&ie=UTF-8&q=php+development+books&btnG=Google+Search";
                //echo $test;
                //die();//
                $delims = "?&";
                $word = strtok($test, $delims);
                while (is_string($word)) {
                    echo $word."<br/>";
                    $word = strtok($delims);// NEXT TOKEN
                }
            ?>
            <h4>strip_tags one of XSS solutions</h4>

            <?php
                $string = "<p>\"I <i>simply</i> will not have it,\" <br/>said Mr Dean.</p>
                <p><b>The end.</b></p><script>for(;;);</script>";
                echo strip_tags($string,"<br><p><i>");
            ?>
            <h4>htmlentities one of XSS solutions</h4>
            <?php
                echo htmlentities($string);
            ?>

            <h1>Date and Time</h1>
            <?php
                echo 'time() = ' . time();
            ?>
            <h4>getdate()</h4>
             <?php
                $date_array = getdate(); // no argument passed so today's date will be used
                foreach ($date_array as $key => $val) {
                    echo "$key = $val<br>";
                }
             ?>
             <hr/>
             <?php 
                echo "<p>Today's date: ".$date_array['mon']."/".$date_array['mday']."/".
                $date_array['year']."</p>";
             ?>
             <h3>date</h3>
            <?php
                $time = time(); //stores the exact timestamp to use in this script
                echo date("m/d/y G:i:s e");
                echo "<br/>";
                echo "Today is ";
                echo date("jS \o\f F Y, \a\\t g:ia \i\\n e", $time);
            ?>
            <h3>mktime</h3>
            <?php
                $ts = mktime(7, 7, 7, 7, 7, 2007);
                echo date("m/d/y G:i:s e", $ts);
                echo "<br/>";
                echo "The date is ";
                echo date("l jS \o\f F Y, \a\\t g:ia \i\\n e", $ts );
            ?>

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
