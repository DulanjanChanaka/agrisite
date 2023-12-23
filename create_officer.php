<?php
require_once("inc/connection.php");
session_start();

if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
    exit();
}

$first_name = $_SESSION['first_name'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = array();

    // Validate form data
    $required_fields = array('first_name', 'last_name', 'email', 'password');
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            $errors[] = ucfirst(str_replace('_', ' ', $field)) . ' is required';
        }
    }

    if (empty($errors)) {
        // Clean and escape input data
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Use password_hash for secure hashing

        // Set additional officer-related fields
        $is_officer = 1; // Assuming 1 means the user is an officer

        // Insert data into the user table
        $query = "INSERT INTO user (first_name, last_name, email, password, is_officer) VALUES ('$first_name', '$last_name', '$email', '$hashed_password', $is_officer)";

        $result = mysqli_query($connection, $query);

        if ($result) {
            // Success
            echo "Officer created successfully!";
        } else {
            // Failure
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        // Display validation errors
        echo implode('<br>', $errors);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Officer</title>
</head>
<body>
    <h2>Create Officer</h2>
    <form action="create_officer.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Create Officer</button>
    </form>
</body>
</html>
