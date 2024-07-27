<?php


    if (isset($_POST["btn"])){
        echo "request duowc gui di";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # code...
        echo "day la post";
        echo "</br>";
        $name = $_POST['ten'];
        echo $name;
        if ($name=="test") {
            # code...
            echo "tim thay test";
        }elseif ($name=="bantest") {
            # code...
            echo "tim thay ba test";
        }else {
            # code...
            echo "khogn tim thay du lieu ve $name";
        }
    }
?>

<form action="search.php" method="post">
    id: <input type="next" name="ten" >
    <input type="submit" value="btn" name="btn">