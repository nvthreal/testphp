<html>
    <body>
        <?php
        $err="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST['test'])){
                $err = "Not valid test value";
            }
            if(!empty($_POST['test'])){
                $err = "Successfuly";
            }
        }
        ?>

        <form action="check-data.php" method="post">
            <input type="text" placeholder = "test" name="test">
            <span><?php echo $err; ?></span>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>