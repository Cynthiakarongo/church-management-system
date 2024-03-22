<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Members Directory</title>
    <style>
        /* Add CSS styles for formatting */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h2 {
            color: #333;
        }
        .member {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Church Members Directory</h2>

        <!-- PHP code to retrieve member directories from the database -->
        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "church_project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve member directories
        $sql = "SELECT full_name, email FROM member_management";
        $result = $conn->query($sql);

        // Display member directories
        if ($result->num_rows > 0) {
            echo "<ul class='member'>";
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["full_name"] . " - " . $row["email"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "0 results";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>
</body>
</html>
