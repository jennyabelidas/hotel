<?php
$servername = "localhost";
$username = "cheky"; // Replace with your DB username
$password = "cheky";     // Replace with your DB password
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
