<?php
include "connection.php";
$sql = "SELECT * FROM contact";
$query = mysqli_query($conn,$sql);
while($row  = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['f_name']; ?></td>
        <td><?php echo $row['l_name'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><a href="contact.php">
            <button class="btn btn-danger" onclick="deletedata(<?php echo $row['id'];?>)">delete</button>
        </a>
        </td>
        <td><a href="contact.php?id=<?php echo $row['id'];?>">
            <button class="btn btn-primary" onclick="">Edit</button>
        </a></td>
    </tr>
    <?php
}

?>