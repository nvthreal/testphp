<?php
    include('dbconnect.php');

    $id = "";
    $userid = 'admin';
    $passid = '1';
    $role   = 1;

    $qry = "INSERT INTO member(id, userid, passid, role)
    VALUES('$id','$userid','$passid','$role') ";

    mysqli_query($conn, $qry);

?>