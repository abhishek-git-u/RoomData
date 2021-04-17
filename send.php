<?php
    include "db_connect.php";
    $light =isset($_GET['light']);
    $fan = isset($_GET['fan']);
    echo $light;
    $SQL = "INSERT INTO roomdata.logdata (LIGHT,FAN) VALUES ($light,$fan)";  
    // Execute SQL statement
    mysqli_query($conn,$SQL);
?>