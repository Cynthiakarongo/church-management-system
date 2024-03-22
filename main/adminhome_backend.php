<?php

// Function to retrieve member data from the database
function get_Members() {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database servername
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname= "church_project"; // Change this to your database name
    
    // Create a PDO connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=church_project", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL query to select member data
        $sql = "SELECT full_name, email, phone, address, date_of_birth, membership_type, gender FROM member_management";
        
        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Execute the statement
        $stmt->execute();

        // Fetch all rows as associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array('result' => $result);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// Fetch member data
$member = get_Members();

?>
