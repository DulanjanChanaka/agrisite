<?php

$connection = mysqli_connect('localhost', 'root', '1234', 'userdb');

if (mysqli_connect_errno()) {
    die('Database connection failed: ' . mysqli_connect_error());
} else {
    "Connection successful.";
}

?>
