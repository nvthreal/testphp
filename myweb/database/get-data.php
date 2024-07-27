<?php
    include('dbconnect.php');

    $qry= "SELECT * from member";

    $rs = mysqli_query($conn, $qry);

    $count =  mysqli_num_rows($rs);

    if ($count > 0) {
        # code...
        #$row = mysqli_fetch_array($rs);
        
        #print_r ($row);
        #rs Array ( [0] => 1 [id] => 1 [1] => admin [userid] => admin [2] => 1 [passid] => 1 [3] => 1 [role] => 1 ) 
        while ($row = mysqli_fetch_array($rs)) {
            # code...
            #echo id,userid from database to website
            echo $row['id'] . "|" . $row['userid'];
            echo "<br>";
        }
    }

    
?>