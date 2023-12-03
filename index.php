<?php

echo "Hello Azure5!";
$servername = "iot-health-app.database.windows.net";
$username = "iot-health-app";
$password = "fsktm123$";
$databaseName = "iothealthapp-database";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

