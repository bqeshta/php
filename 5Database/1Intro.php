<?php
    $dbServer = "localhost";
    $dbUser   = "root";
    $dbPass   = "";
    $dbName   = "wac";


    $link = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    $rs = mysqli_query($link, "select * from country");
    echo "<ul>";
    //mysqli_fetch_assoc Associative Array (index = columns names)
    //while($row = mysqli_fetch_assoc($rs)){
        //echo "<li>" . $row["id"]. ' ' . $row["name"] . "</li>";
    //mysqli_fetch_row Classic Array (index = column order in Table)
    //while($row = mysqli_fetch_row($rs)){
        //echo "<li>" . $row[0]. ' ' . $row[1] . "</li>";
    //mysqli_fetch_array Classic + Associative Array (index = column order in Table or Column Names)
    while($row = mysqli_fetch_array($rs)){
        //echo "<li>" . $row[0]. ' ' . $row[1] . "</li>";
        echo "<li>" . $row["id"]. ' ' . $row["name"] . "</li>";
    }
    echo "</ul>";
    //var_dump($row);
?>