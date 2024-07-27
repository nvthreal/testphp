

<form action="login.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="userid"></br>
    <label for="password">Password</label><br>
    <input type="password" name="password"></br>
    <button type="submit" name="login-btn" value="Login" >Login</button>
</form>

<?php
session_start();

if(isset($_POST['userid']) & isset($_POST['password'])){
    $username = $_POST['userid'];
    $password = $_POST['password'];
    if (($username == 'admin') & ($password == 'admin')) {
        # code...
        $_SESSION['userid'] = $username;
        session_regenerate_id(true);
        header('location:admin.php');
    }else {
        # code...
        header ("location:login.php");
        echo "err";
    }
}

?>