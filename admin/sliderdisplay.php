<?php
include "connection.php";

$sql = "SELECT * FROM slider";


// }
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><img src="<?php echo $row['image']; ?>" alt="Image" width="100" height="100"></td>
        <td>
            <?php if ($row['status'] == 0) {
                ?>
                <button class="btn btn-success">active</button>
            <?php
            } else {
                ?>
                <button class="btn btn-danger">in active</button>
                <?php
            }
            ?>
        </td>

        <td>
            <a href="slidershow.php">
                <button class="btn btn-danger" onclick="deletedata(<?php echo $row['id'] ?>)">Delete</button>
            </a>
            <a href="slider.php?id=<?php echo $row['id'] ?>">
                <button class="btn btn-primary">edit</button>

            </a>

        </td>
    </tr>
    <?php
}
?>