<?php

    include "../dbconnect/dbconnect.php";



    if (isset($_POST['add-btn'])) {
        # code...
        $product_name= $_POST['productName'];
        # only get name product image
        $productImg = $_FILES['productImg']['name'];
        # set original path after upload to move file 
        $original_path = $_FILES['productImg']['tmp_name'];
        $destinationFolder='../img/product/';
        $destinationPath = $destinationFolder . $productImg;
        $locate_file = move_uploaded_file($original_path, $destinationPath);

        $productPrice = $_POST['price'];
        $productWarranty = $_POST['warranty'];

        $q = "INSERT INTO product (product_name, img, price, warranty)
        values('$product_name', '$productImg', '$productPrice', '$productWarranty')
        ";
        mysqli_query($conn, $q);

    }

?>

<form action="upload_product.php" method="post" enctype = "multipart/form-data">
    <p>Name of product</p>
    <input type="text" name="productName">
    <p>Image of product</p>
    <input type="file" name='productImg'>
    <p>Price</p>
    <input type="text" name="price">
    <p>Warranty</p>
    <input type="text" name="warranty">

    <button type="submit" name="add-btn">Upload Product</button>
</form>