<?php
session_start();

if (isset($_POST['submit'])) {
    require_once('db_connection.php'); // Include your database connection file

    $errors = array();

    if (!isset($_POST['username']) || empty(trim($_POST['username']))) {
        $errors[] = 'Username is Missing / Invalid';
    }

    if (!isset($_POST['password']) || empty(trim($_POST['password']))) {
        $errors[] = 'Password is Missing / Invalid';
    }

    if (empty($errors)) {
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        // Use a more secure hashing algorithm like bcrypt
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $query = "SELECT * FROM user
                   WHERE username = '{$username}'
                   LIMIT 1 ";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {
            if (mysqli_num_rows($result_set) == 1) {
                $user = mysqli_fetch_assoc($result_set);

                // Verify the password using password_verify
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $username;
                    header('Location: user_page.php');
                    exit();
                } else {
                    $errors[] = 'Invalid Username / Password';
                }
            } else {
                $errors[] = 'Invalid Username / Password';
            }
        } else {
            $errors[] = 'Database query failed';
        }
    }
}

// Handle errors here (display error messages or redirect to login page with an error parameter)
?>
