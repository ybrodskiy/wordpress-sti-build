<?php
$DB_NAME = getenv("DB_NAME");
$DB_USER = getenv("DB_USER");
$DB_PASSWORD = getenv("DB_PASSWORD");
$DB_SERVICE = getenv("DB_SERVICE");

$DB_HOST = strtoupper($DB_SERVICE) . "_SERVICE_HOST";

echo 'DB_HOST' . $DB_HOST;

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
