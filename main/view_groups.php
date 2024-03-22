<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Groups</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>View Groups</h2>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "church_project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM groups_management";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr><th>Group Name</th><th>Leader</th><th>Meeting Day</th><th>Meeting Time</th></tr></thead>";
        echo "<tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["group_name"] . "</td>";
            echo "<td>" . $row["leader"] . "</td>";
            echo "<td>" . $row["meeting_day"] . "</td>";
            echo "<td>" . $row["meeting_time"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No groups found.";
    }
    $conn->close();
    ?>

    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            // Redirect back to the add groups page
            window.history.back();
        }
    </script>
</body>
</html>
