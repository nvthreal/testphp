<!DOCTYPE html>
<html>
<head>
    <title>Insecure Upload Form PHP</title>
</head>
<body>
    <form action="insecure-upload-form.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <br/>
        <input type="submit" name="btn-upload" value="Upload">
    </form>

</body>
</html>


<?php
    if (isset($_FILES['upload'])) {
        if ($_FILES['upload']['size'] == 0){
            echo "please attach a file";
        }
        if ($_FILES['upload']['size'] !=0){
            # original path after user submit upload
            $uploadFile = $_FILES['upload']['tmp_name'];
            # chuyen no toi thu muc chi dinh voi ten moi
            $uploadFilename= $_FILES['upload']['name'];
            $extensionFile = pathinfo($uploadFilename, PATHINFO_EXTENSION);
            # duong dan thu muc
            $destinationFolder = './';
            $newFilename = uniqid(). '.' . $extensionFile;
            $destinationPath = $destinationFolder . $newFilename;
            $locate_file = move_uploaded_file($uploadFile, $destinationPath);

            $fullpath = realpath($destinationPath);

            echo "File duoc tai len tai " . $fullpath . " thanh cong"; 
        }
    }
?>