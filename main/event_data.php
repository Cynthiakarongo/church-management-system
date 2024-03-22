<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$date= $_POST['date'];
$event_name = $_POST['event_name'];
$room = $_POST['room']; 
$event_id=$_POST['event_id'];// Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `event_management` (date, event_name, room,event_id) VALUES (?, ?, ?,?)");
    $stmt->bind_param("sssi", $date, $event_name, $room,$event_id);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
