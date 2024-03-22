<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$child_name = $_POST['child_name'];
$guardian_name = $_POST['guardian_name'];
$guardian_email = $_POST['guardian_email'];
$phone_number=$_POST['phone_number']; // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `children_check_in` (child_name, guardian_name, guardian_email,phone_number) VALUES (?, ?, ?,?)");
    $stmt->bind_param("sssi", $child_name, $guardian_name, $guardian_email,$phone_number);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
