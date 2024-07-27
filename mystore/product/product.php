<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .product-image {
        max-width: 110px;
        height: 120px ;
    }

    .product-image-container {
        display: flex;
        align-items: center;
    }

</style>


</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Phone type</th>
                <th>Images</th>
                <th>Price</th>
                <th>Warranty</th>
            </tr>
        </thead>
        <br>
        <tbody>
            <?php
            include "../dbconnect/dbconnect.php";

            $q = "select * from product";
            $rs = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_array($rs)) {
                # code...
            ?>
            <br> 
            <tr>
                <td><?php echo $row['product_name'] ?></td>
                <td class="product-image-container"><img class="product-image" src="../img/product/<?php echo $row['img'] ?>" alt=""></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['warranty'] ?></td>
                <td>
                    <form method="post" action="pdelete.php">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="pedit.php">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>