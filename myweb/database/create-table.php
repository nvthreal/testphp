<?php
    include('dbconnect.php');
    

    #create table
    $query = "CREATE TABLE member (
        id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userid VARCHAR(20) NOT NULL,
        passid VARCHAR(20) NOT NULL,
        role INT(5)
    )";
    #execute query
    if ($conn -> query($query) == TRUE) {
        # code...
        echo "query succesfulyt";
    }else {
        # code...
        echo "access denied!";
    }
?>