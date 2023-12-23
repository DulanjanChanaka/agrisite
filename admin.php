<?php
require_once("inc/connection.php");
session_start();

if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
    exit();
}

$first_name = $_SESSION['first_name'];

// Check if the delete button is clicked
if(isset($_POST['delete_user'])) {
    $user_id_to_delete = mysqli_real_escape_string($connection, $_POST['user_id_to_delete']);
    
    // Perform the deletion query
    $delete_query = "DELETE FROM user WHERE id = {$user_id_to_delete}";
    $delete_result = mysqli_query($connection, $delete_query);

    if($delete_result) {
        // Success
        echo "User deleted successfully!";
    } else {
        // Failure
        echo "Error deleting user: " . mysqli_error($connection);
    }
}

// Retrieve the user data
$query = "SELECT * FROM user";
$result_set = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars($first_name); ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;

}


        button:hover {
            background-color: #45a049;
            
        }
    </style>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($first_name); ?> to your user page!</h2>
    <!-- Add your user page content here -->
    <p>This is your personalized content.</p>
    <button onclick="window.location.href='create_officer.php'">Create Officer</button>
    <?php
    if ($result_set) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Officer</th><th>Action</th></tr>";
        while ($user = mysqli_fetch_assoc($result_set)) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['first_name']}</td>";
            echo "<td>{$user['last_name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['is_officer']}</td>";
            echo "<td>
                    <form method='post'>
                        <input type='hidden' name='user_id_to_delete' value='{$user['id']}'>
                        <button type='submit' name='delete_user'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Database query failed: " . mysqli_error($connection);
    }

    mysqli_close($connection);
    ?>

    <!-- Add a button to navigate to create_officer.php -->
    
</body>
</html>
