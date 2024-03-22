<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$member_id = $_POST['member_id'];
$donation_amount = $_POST['donation_amount'];
$pledge_amount = $_POST['pledge_amount']; // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $d->prepare("INSERT INTO `contribution1_tracking` (member_id, donation_amount, pledge_amount) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $member_id, $donation_amount, $pledge_amount);

    // Execute the statement
    $stmt->execute();
    echo "Registration successful"; // Changed "echo" statement

    // Close statement and connection
    $stmt->close();
    $d->close();
}
?>
