<?php
require_once("inc/connection.php");
session_start();

if (isset($_POST['submit'])) {
    $errors = array();

    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        $errors[] = 'Username is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
        $errors[] = 'Password is Missing / Invalid';
    }

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";
        $result_set = mysqli_query($connection, $query);

        if ($result_set) {
            if (mysqli_num_rows($result_set) == 1) {
                $user = mysqli_fetch_assoc($result_set);

                // Verify password using password_verify
                if (password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['first_name'] = $user['first_name'];

                    // Check if the user is an admin or officer
                    if ($user['is_admin'] == 1) {
                        $_SESSION['is_admin'] = true;
                        header('Location: admin.php');
                        exit();
                    } elseif ($user['is_officer'] == 1) {
                        header('Location: officer.php');
                        exit();
                    } else {
                        header('Location: user_page.php');
                        exit();
                    }
                } else {
                    $errors[] = 'Invalid Password';
                }
            } else {
                $errors[] = 'Invalid Username';
            }
        } else {
            $errors[] = 'Database query failed';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            width: 100%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Center items vertically */
            padding: 10px 15px;
            background-color: green;
            height: 60px; /* Set fixed height */
        }

        .logo img {
            max-height: 50px; /* Ensure the logo does not exceed the height of the navbar */
        }

        .nav_list ul {
            display: flex;
            flex-direction: row;
            list-style: none;
            gap: 30px;
            color: white;
            
        }

        li:hover {
            background-color: #111;
            cursor: pointer;
            padding: 5px;
            border-radius: 10px;
        }
   .nav_list a {
            text-decoration: none;
            color: white;
        }


        .login-form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .register-link a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="navbar">
        <div class="logo">
            <img src="LOGO.png" alt="Logo">
        </div>
        <div class="nav_list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="loginBtn"><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
           
        </div>
    <div class="login-form">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="">Email:</label>
            <input type="text" id="" name="email" required>

            <label for="">Password:</label>
            <input type="password" id="" name="password" required>

            <button type="submit" name="submit">Login</button>
        </form>

        <div class="register-link">
            <p>Not registered? <a href="register.php">Register here</a>.</p>
        </div>
    </div>
</body>
</html>

