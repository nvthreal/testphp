<?php
    $dbserver='localhost';
    $userdb='root';
    $passdb='';
    $dbname='mystore';

    $conn = new mysqli($dbserver, $userdb, $passdb, $dbname);

    if ($conn) {
        # code...
        mysqli_query($conn, "SET NAMES 'utf8'") ;
        echo 'Connected!';
    }else {
        # code...
        #echo "Failed to connect database!";
    }
?>