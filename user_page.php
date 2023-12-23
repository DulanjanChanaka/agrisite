<?php
require_once("inc/connection.php");
session_start();

if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
    exit();
}

$first_name = $_SESSION['first_name'];

// Check if the message form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = array();

    // Validate form data
    $required_fields = array('email', 'pno', 'ono', 'message');
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            $errors[] = ucfirst($field) . ' is required';
        }
    }

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $pno = mysqli_real_escape_string($connection, $_POST['pno']);
        $ono = mysqli_real_escape_string($connection, $_POST['ono']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);

        // Insert the message into the messages table
        $insert_query = "INSERT INTO message (email, pno, ono, message) VALUES ('$email', '$pno', '$ono', '$message')";
        $insert_result = mysqli_query($connection, $insert_query);

        if ($insert_result) {
            // Success
            echo "Message sent successfully!";
        } else {
            // Failure
            echo "Error sending message: " . mysqli_error($connection);
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
    <title>Send Message</title>
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

        form {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($first_name); ?>! Send a Message For Officer</h2>
    
    <!-- Message Form -->
    <form action="user_page.php" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="pno">Phone Number (pno):</label>
        <input type="text" id="pno" name="pno" required>

        <label for="ono">Other Number (ono):</label>
        <input type="text" id="ono" name="ono" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>
