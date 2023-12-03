<?php

echo "Hello Azure1!";
$serverHost = "iot-health-app.database.windows.net";
$user = "iot-health-app";
$password = "fsktm123$";
$databaseName = "iothealthapp-database";

$connectNow = new mysqli_connect($serverHost, $user, $password, $databaseName);

// Check connection
if ($connectNow->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "Hello Azure2!";
