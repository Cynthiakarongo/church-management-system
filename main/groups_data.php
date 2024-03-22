<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$group_name= $_POST['group_name'];
$leader = $_POST['leader'];
$meeting_time = $_POST['meeting_time'];
$meeting_day=$_POST['meeting_day']; // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `groups_management` (group_name, leader, meeting_time,meeting_day) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $group_name, $leader, $meeting_time,$meeting_day);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
