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
        $hashed_password = sha1($password);

        $query = "SELECT * FROM user
                   WHERE email = '{$email}'
                   AND password = '{$hashed_password}'
                   LIMIT 1 ";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {
            if (mysqli_num_rows($result_set) == 1) {
                // Fetch user details
                $user = mysqli_fetch_assoc($result_set);
                $_SESSION['first_name'] = $user['first_name'];
                header('Location: user_page.php');
                exit();
            } else {
                $errors[] = 'Invalid Username / Password';
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
            font-family: Arial, sans-serif;
        }

        .login-form {
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

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: blue;
        }
    </style>
</head>
<body>
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

                    // Check if the user is an admin
                    if ($user['is_admin'] == 1) {
                        $_SESSION['is_admin'] = true;
                        header('Location: admin.php');
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
            font-family: Arial, sans-serif;
        }

        .login-form {
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

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: blue;
        }
    </style>
</head>
<body>
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


















<?php
require_once("inc/connection.php");
session_start();

if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
    exit();
}

$first_name = $_SESSION['first_name'];

$query = "SELECT * FROM user";
$result_set = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars($first_name); ?></title>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($first_name); ?> to your user page!</h2>
    <!-- Add your user page content here -->
    <p>This is your personalized content.</p>
    
    <?php
    if ($result_set) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>officer</th><th>Action</th></tr>";
        while ($user = mysqli_fetch_assoc($result_set)) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['first_name']}</td>";
            echo "<td>{$user['last_name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['is_officer']}</td>";
            echo "<td><a href='delete_user.php?id={$user['id']}'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Database query failed: " . mysqli_error($connection);
    }

    mysqli_close($connection);
    ?>

    <!-- Add a button to navigate to create_officer.php -->
    <button onclick="window.location.href='create_officer.php'">Create Officer</button>
</body>
</html>















<?php
require_once("inc/connection.php");
session_start();

// if (!isset($_SESSION['first_name'])) {
//     header("Location: login.php");
//     exit();
// }

$first_name = $_SESSION['first_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars($first_name); ?></title>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($first_name); ?> to your user page!</h2>
    <!-- Add your user page content here -->
    <p>This is your personalized content.</p>
</body>
</html>
