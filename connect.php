<?php
$host = '127.0.0.1'; // Database host (localhost in most cases)
$db = 'elearning'; // Your database name
$user = 'root'; // MySQL username
$pass = 'sarafathima'; // MySQL password

// Create a MySQLi connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>