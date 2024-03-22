<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

// Retrieve values from POST
$full_name= $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date_of_birth= $_POST['date_of_birth'];
$gender = $_POST['gender'];
$membership_type= $_POST['membership_type'];
$id=$_POST['id'];
 // Added missing semicolon at the end of this line

// Establish database connection
$d = new mysqli('localhost', 'root', '', 'church_project');

// Check connection
if ($d->connect_error) {
    die("Connection failed: " . $d->connect_error);
}

    // Prepare and bind SQL statement
$stmt = $d->prepare("INSERT INTO `member_management` (full_name, email, phone,address,date_of_birth,gender,membership_type,id) VALUES (?,?, ?, ?,?,?,?,?)");
$stmt->bind_param("ssiisssi", $full_name,$email,$phone,$address,$date_of_birth,$gender,$membership_type,$id);
    // code...

// Execute the statement
$stmt->execute();
echo "Registration successful"; // Changed "echo" statement

// Close statement and connection
$stmt->close();
$d->close();
?>

