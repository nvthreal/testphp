<?php
$myfile = fopen("data.dt", "r") or die ("err");

while (!feof($myfile)) {
    # code...
    echo fgets($myfile);
}

fclose($myfile);
?>