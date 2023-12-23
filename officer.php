<?php
require_once("inc/connection.php");
session_start();

// if (!isset($_SESSION['first_name'])) {
//     header("Location: login.php");
//     exit();
// }

$first_name = $_SESSION['first_name'];

// Fetch all messages from the messages table
$query = "SELECT * FROM message";
$result_set = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars($first_name); ?> - Officer Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($first_name); ?> to the Officer Page!</h2>
    
    <!-- Display Message Data -->
    <?php
    if ($result_set) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Officer Number</th><th>Message</th></tr>";
        while ($message = mysqli_fetch_assoc($result_set)) {
            echo "<tr>";
            echo "<td>{$message['id']}</td>";
            echo "<td>{$message['name']}</td>";
            echo "<td>{$message['email']}</td>";
            echo "<td>{$message['pno']}</td>";
            echo "<td>{$message['ono']}</td>";
            echo "<td>{$message['message']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Database query failed: " . mysqli_error($connection);
    }

    mysqli_close($connection);
    ?>
</body>
</html>

