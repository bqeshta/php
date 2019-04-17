<?php
    $dbServer = "localhost";
    $dbUser   = "root";
    $dbPass   = "";
    $dbName   = "wac";


    $link = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    function Clear($q){
        global $link;
        //strip_tags prevent XSS
        //mysqli_real_escape_string prevent SQL Injection
        return strip_tags(mysqli_real_escape_string($link, trim($q)));
    }
?>