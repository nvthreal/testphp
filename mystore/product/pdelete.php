<?php

    include "../dbconnect/dbconnect.php";

    $id = $_POST['id'];

    $q = "delete from product where id = $id";
    mysqli_query($conn, $q);
    echo "Product deleted!";
    header('location: product.php');
?>