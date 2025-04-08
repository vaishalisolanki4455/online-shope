<?php
include "connection.php";

$id = $_GET['id'] ?? '  ';
$sql = "SELECT * FROM grocee WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

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
            background: linear-gradient(135deg, #ff9a8b, #96e6a1);
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
            color: #ff5722; /* Orange */
            text-align: center;
        }

        .btn-custom {
            background: #28a745; /* Green */
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #218838;
        }

        .form-label {
            color: #ff5722; /* Orange */
            font-weight: bold;
        }

        .title-container {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            font-weight: bold;
            color: #ff5722; /* Orange */
        }
        .a{
            color:rgb(22, 175, 55);
        }
    </style>
</head>

<body>
    <div class="form-card">
        <div class="title-container">
            <h1>Groc</h1>
            <h1 class="a">ee</h1>
        </div>

        <form action="insert.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?? '' ?>" id="">

            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?? '' ?>" id="name"
                    placeholder="Enter your name">
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?? '' ?>"
                    id="email" placeholder="Enter your email">
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?? '' ?>"
                    id="password" placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-custom">
                    <?php echo $id ? 'Update' : 'Submit'; ?>
                </button>
            </div>
            <div>
                <p class="text-center mt-4">Have an account? <a href="login.php" class="text-decoration-none">Log in</a> </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFy4cbxp8Vk9KVwpU2j8RJSJOcd8nwtQ8FujLR+0Pr6V+BtNURy25qJQo6"
        crossorigin="anonymous"></script>
</body>

</html>
