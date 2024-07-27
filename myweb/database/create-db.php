<?php

#connect database with dbconnect.php
include "dbconnect.php";
#create database
$dbname ='dbfromcode';
try {
    //code...
    $sql = "CREATE DATABASE dbfromcode";

    if (mysqli_query($conn, $sql)) {
        # code...
        echo "Create database successfully!";
    }else {
        # code...
        throw new Exception("Error Processing Request");
}
} catch (Exception $e) {
    //throw $th;
    #debug 
    #echo "error" . $e->getMessage();
    echo "Error Processing Request";
}

?>