<?php
$myfile = fopen("newf.data", "a") or die("err");

if (isset($_POST['input'])){
    $content = $_POST['input'];
    fwrite($myfile, $content);
    fclose($myfile);
}
?>

<form action = "wfile.php" method="post">
    <input type = "text" name = "input">
    <button type = "submit" name = "btn" value="Submit">Submit</btn> 
</form>