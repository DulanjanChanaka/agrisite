<?php require_once(connection.php); ?>
<?php
// Replace these with your actual database connection details
$servername = "your_server_name";
$username = "root";
$password = "1234";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle registration logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // TODO: Implement secure password hashing and validation
    // For example, you can use password_hash() for hashing

    // Insert user data into the 'users' table
    $sql = "INSERT INTO users (name, phone_number, username, password) VALUES ('$name', '$phone', '$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Successful registration
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to the user's page
        header("Location: user_page.php");
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
