<?php
    include "../dbconnect/dbconnect.php";

    $id = $_POST['id'];
    $q = "select * from product where id=$id";
    $rs = mysqli_query($conn, $q);

    #getching data from db 
    $row = mysqli_fetch_assoc($rs);


    if (isset($_POST['add-btn'])) {
        # code...
        $updatePname= $_POST['productName'];
        # only get name product image
        $updateImg = $_FILES['productImg']['name'];
        # set original path after upload to move file 
        $original_path = $_FILES['productImg']['tmp_name'];
        $destinationFolder='../img/product/';
        $destinationPath = $destinationFolder . $updateImg;
        $locate_file = move_uploaded_file($original_path, $destinationPath);

        $updatePrice = $_POST['price'];
        $updateWarranty = $_POST['warranty'];

        $q = "UPDATE product SET product_name = '$updatePname', img = '$updateImg', price ='$updatePrice', warranty='$updateWarranty' where id=".$id;
        mysqli_query($conn, $q);
        echo "Product updated!";
        header('location: product.php');

    }

?>

<form action="pedit.php" method="post" enctype = "multipart/form-data">

<h1>Detail of <?php echo $row['product_name'] ?></h1>
<!-- get id of database to query update -->
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <p>Name of product</p>
    <input type="text" name="productName" value = <?php echo $row['product_name'] ?>>
    <p>Image of product</p>
    <span><img src="../img/product/<?php echo $row['img']?>" alt=""></span>
    <input type="file" name='productImg'>
    <p>Price</p>
    <input type="text" name="price" value = <?php echo $row['price']?>>
    <p>Warranty</p>
    <input type="text" name="warranty" value = <?php echo $row['warranty']?>>

    <button type="submit" name="add-btn">Update Product</button>
</form>

