<?php

    include "dbconnect.php";

    $qry = "SELECT userid, passid, role, fullname 
    from member inner join detail
    on member.id = detail.id 
    ";

    $rs = mysqli_query($conn, $qry);

    if (mysqli_num_rows($rs) > 0) {
        # code...
        while ($row = mysqli_fetch_array($rs)) {
            # code...
            echo $row['fullname'] . ' as ' . $row['userid'];
        }
    }

?>