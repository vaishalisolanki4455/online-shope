<?php
include "connection.php";
// session_start();
$id = base64_decode($_GET['id'] ?? '');
$sql = "SELECT * FROM form WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
// $_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }
        .form-card h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-custom {
            background: #5a67d8;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #4c51bf;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2 class="text-center">Admin Form</h2>
        <form action="<?php echo $id ? 'update.php' : 'insert.php'; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?? '' ?>" id="">

            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" 
                       value="<?php echo $row['name'] ?? '' ?>" id="name" placeholder="Enter your name">
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" 
                       value="<?php echo $row['email'] ?? '' ?>" id="email" placeholder="Enter your email">
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" 
                       value="<?php echo $row['password'] ?? '' ?>" id="password" placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-custom">
                    <?php echo $id ? 'Update' : 'Submit'; ?>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFy4cbxp8Vk9KVwpU2j8RJSJOcd8nwtQ8FujLR+0Pr6V+BtNURy25qJQo6" crossorigin="anonymous"></script>
</body>
</html>
