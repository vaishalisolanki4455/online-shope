<?php
include "connection.php";


$sql = "SELECT product.id,product.product_name,product.description,product.price,product.size,product.quantity,product.discount_price,product.stock,product.stock_limit,category.category,product.image,product.status 
FROM product
LEFT JOIN  category ON category.id = product.category_id ";
$query = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['size']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['discount_price']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td><?php echo $row['stock_limit']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><img src="<?php echo $row['image']; ?>" alt="Image" width="100" height="100"></td>
        <td>
            <?php if ($row['status'] == 0) {
                ?>
                <button class="btn btn-primary">Active</button>
                <?php
            } else {
                ?>
                <button class="btn btn-danger">in active</button>
                <?php
            } ?>


        </td>

        <td>
            <a href="list-products.php">
                <button class="btn btn-danger" onclick="deletedata(<?php echo $row['id']; ?>)">delete</button>
            </a>
        </td>
        <td>
            <a href="productcreate.php?id=<?php echo $row['id'] ?>">
                <button class="btn btn-primary">edit</button>
            </a>
        </td>
    </tr>
    <?php
}
?>