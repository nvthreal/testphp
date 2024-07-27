<?php
    $songuyen = 1234;

    if (!filter_var($songuyen, FILTER_VALIDATE_INT) == FALSE){
        echo "validated";
    }else {
        # code...
        echo "not validate";
    }
?>