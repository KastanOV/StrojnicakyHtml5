<?php
$servername = "wm29.wedos.net";
$username = "a28170_jerabek";
$password = "lithium1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

