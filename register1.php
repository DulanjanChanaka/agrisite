<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .registration-form {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #096;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <h2>Registration</h2>
        <form action="register_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

<!-- <?php
require_once("inc/connection.php");

$first_name = 'Dileep';
$last_name = 'YourLastName'; // Replace 'YourLastName' with the actual last name
$email = 'deleep@gmail.com';
$password = 'mypassword';
$hashed_password = sha1($password);

$query = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

$result = mysqli_query($connection, $query);

if ($result) {
    echo "1 Record added";
} else {
    echo "Database query failed: " . mysqli_error($connection);
}

mysqli_close($connection);
?> -->
