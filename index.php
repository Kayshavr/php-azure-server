<?php

echo "Hello Azure4!";
$serverHost = "iot-health-app.database.windows.net";
$user = "iot-health-app";
$password = "fsktm123$";
$databaseName = "iothealthapp-database";

// Create connection
$conn = mysqli_connect($serverHost, $user, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "Please";
?>

