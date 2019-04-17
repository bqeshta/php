<?php

        echo "<p>Welcome ".$_POST["user"]."</p>";
        if(!empty($_POST["products"])){
            echo "Your Products <ul>";
            foreach($_POST["products"] as $product){
                echo "<li>$product</li>";
            }
            echo "</ul>";
        }
        else
            echo "<br>There is no products";

?>