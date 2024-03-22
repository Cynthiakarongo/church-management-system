<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Newsletter</title>
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
        .announcement {
            margin-bottom: 20px;
        }
        .announcement h3 {
            color: #007bff;
        }
        .directory {
            margin-top: 30px;
        }
        .directory h3 {
            color: #28a745;
        }
        .member {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Weekly Church Newsletter</h2>

        <!-- Announcements Section -->
        <div class="announcement">
            <h3>Announcements & Updates</h3>
            <p>Dear Members,</p>
            <p>Here are the latest announcements and updates:</p>

            <?php
            // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "church_project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve member directories
        $sql = "SELECT announcement FROM announcements";
        $result = $conn->query($sql);

        // Display member directories
        if ($result->num_rows > 0) {
            echo "<ul class='announcements'>";
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["announcement"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "0 results";
        }

        // Close database connection
        $conn->close();
       
        ?>
        <!-- Church Members Directory Section -->
        <div class="directory">
        <h3>Church Members Directory</h3>
            <p>Here is the directory of our church members for easy communication:</p>
        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
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
            
        
    </div>
</body>
</html>
