<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "church_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$service_date = $_POST['service_date'];
$service_type = $_POST['service_type'];
$attendance_count=$_POST['attendance_count'];

// Fetch current attendance count
$sql_select = "SELECT attendance_count FROM attendance_management WHERE service_date = ? AND service_type = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("ss", $service_date, $service_type);
$stmt_select->execute();
$stmt_select->bind_result($attendance_count);
$stmt_select->fetch();
$stmt_select->close();


// Prepare SQL statement to insert data into database
$sql_insert = "INSERT INTO attendance_management (service_date, service_type, attendance_count) VALUES (?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("ssi", $service_date, $service_type, $attendance_count);

// Execute SQL statement
if ($stmt_insert->execute()) {
    echo "Attendance submitted successfully";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

// Close connection
$stmt_insert->close();
$conn->close();
