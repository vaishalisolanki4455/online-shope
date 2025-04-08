<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }

        .form-container h2 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ff5722; /* Orange */
        }

        .form-label {
            color: #ff5722; /* Orange */
            font-weight: bold;
        }

        .btn-custom {
            width: 100%;
            background: #28a745; /* Green */
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #218838;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Login Form</h2>
        <form action="logincheck.php" method="post">
            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-custom">Sign In</button>
            <p class="text-center mt-4">Don't have an account? <a href="grocee.php" class="text-decoration-none">Sign up</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFy4cbxp8Vk9KVwpU2j8RJSJOcd8nwtQ8FujLR+0Pr6V+BtNURy25qJQo6" crossorigin="anonymous"></script>
</body>

</html>
