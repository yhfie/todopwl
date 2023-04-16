<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-lanjut";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectionlocalho
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Success";
}

// Set the table name
$table_name = 'whatodo';

// Get the highest ID value from the table
$sql = "SELECT MAX(id) AS max_id FROM $table_name";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$max_id = $row['max_id'];

// Reset the auto-increment value
$sql = "ALTER TABLE $table_name AUTO_INCREMENT = " . ($max_id + 1);
mysqli_query($conn, $sql);

?>
