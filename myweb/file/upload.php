<html>
    <head>
        <body>
            <form action="upload.php" medthod="post" enctype="multipart/form-data">
                <input type="file" name="upload"></input>
</br>
                <input type="submit" name ="btn-upload" value="Upload">
            </form>
        </body>
    </head>
</html>

<?php
    $uploadFile = $_FILES['upload'];
    print_r ($uploadFile);
?>