<?php

error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "church_project"; // changed to match your database name

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // corrected comparison
    $name = $_POST['username'];
    $pass= $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$name' AND password='$pass'"; // corrected SQL query

    $result = mysqli_query($data, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($data));
    }

    $row = mysqli_fetch_array($result);

    if ($row) {
        if ($row["usertype"] == "2") {
            header("location: memberhome.php");
        } elseif ($row["usertype"] == "1") { // corrected comparison
            header("location: adminhome.php");
        } else
         {
            echo "Username or password do not match";


        }
   }
}
?>
