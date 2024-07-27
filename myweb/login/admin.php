<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        # code...
        header('location:login.php');
    }
    echo "Xin chao admin";

    ?>

    <a href="logout.php">
        <button type="submit" value="logout">Logout</button>
    </a>
</body>
</html>