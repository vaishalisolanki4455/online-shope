<?php

include "connection.php";

$sql = "SELECT * FROM blog";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
    // print_r($row['image']);
    // exit();
    ?>
    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['blog'];?></td>
    <td><img src="<?php echo $row['image'];?>" alt="Image" width="100" height="100"></td>
    <td><?php echo $row['description'];?></td>
    
        <td>
            <?php
            if($row['status'] == 0){
                
            ?>
            <button class="btn btn-danger">active</button>
            <?php
           } else{
            ?>
            <button class="btn btn-primary">in active</button>
            <?php
            }?>
        </td>
        
        <td>
                <a href="blogshow.php">
                    <button class="btn btn-danger" onclick="deletedata(<?php echo $row['id']?>)">Delete</button>
                </a>
                <a href="blog.php?id=<?php echo $row['id'] ?>">
                    <button class="btn btn-primary">edit</button>

                    </a>
          
            </td>
    </tr>
    <?php
}
?>