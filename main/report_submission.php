<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST

$service_date= $_REQUEST['service_date'];
$service = $_REQUEST['service'];
$attendance= $_REQUEST['attendance'];
$contribution=$_REQUEST['contribution']; // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {

// print_r($_REQUEST['service_date']);

// die();
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `reports` (service_date, service, attendance,contribution) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssii", $service_date, $service, $attendance,$contribution);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
