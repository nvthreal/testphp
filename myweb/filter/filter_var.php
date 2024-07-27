<?php
    $input = "<script>alert(1)</script>";

    #filter
    $str_filter = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo $str_filter;
?>