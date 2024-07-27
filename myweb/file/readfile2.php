<?php
    $myfile = fopen('data.dt', 'r') or die ('err');
    
    echo "doc file tu fread()" . fread($myfile, filesize('data.dt'));
    
    echo "</br>";
    rewind($myfile); #đặt con trỏ về đầu file vì trước đó fread đã thực hiện đọc tới cuối file
    echo "doc file tu fgets()" . trim(fgets($myfile)); 
    fclose($myfile);
?>