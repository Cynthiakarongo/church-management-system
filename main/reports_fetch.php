<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Church Reports</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "church_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate attendance report
function generateAttendanceReport($conn) {
    $sql = "SELECT service_date, service_type, attendance_count FROM attendance_management";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Attendance Report</h2>";
        echo "<table><tr><th>Service Date</th><th>Service Type</th><th>Attendance Count</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["service_date"] . "</td><td>" . $row["service_type"] . "</td><td>" . $row["attendance_count"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No attendance records found";
    }


    // Prepare SQL statement to sum up a column
$sql = "SELECT SUM(attendance_count) AS total_sum FROM attendance_management"; // Adjust "column_name" and "your_table_name" to the actual column name and table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Total Sum: " . $row["total_sum"];
    }
} else {
    echo "0 results";
}
}

// Function to generate contribution report
function generateContributionReport($conn) {
    $sql = "SELECT member_id, donation_amount, pledge_amount FROM contribution1_tracking";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Contribution Report</h2>";
        echo "<table><tr><th>Member ID</th><th>Donation Amount</th><th>Pledge Amount</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["member_id"] . "</td><td>" . $row["donation_amount"] . "</td><td>" . $row["pledge_amount"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No contribution records found";
    }
}

// Generate reports
generateAttendanceReport($conn);
generateContributionReport($conn);

// Close connection
$conn->close();
?>

</body>
</html>
