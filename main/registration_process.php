<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$event_name = $_POST['event_name']; // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli($host, $user, $password, $db);

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `event_registration` (full_name, email, phone_number, event_name) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $full_name, $email, $phone_number, $event_name);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
