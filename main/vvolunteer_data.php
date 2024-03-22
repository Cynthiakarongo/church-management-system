<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$name = $_POST['name'];
$email = $_POST['email'];
$activity= $_POST['activity']; 
$skills=$_POST['skills'];// Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `volunteer` (name, email, activity,skills) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $name, $email, $activity,$skills);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
