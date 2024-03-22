<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Calendar</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  h2 {
    text-align: center;
    color: #333;
  }

  .event-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .event-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
  }

  .event-item:last-child {
    border-bottom: none;
  }

  .event-item span {
    font-weight: bold;
  }
</style>
</head>
<body>

<h2>Event Calendar</h2>

<!-- Event Container -->
<div class="event-container">
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

  // SQL query to fetch event data from the database
  $sql = "SELECT * FROM event_management";
  $result = $conn->query($sql);

  // Check if there are any results
  if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
          echo '<div class="event-item">';
          echo '<span>Date: </span>' . $row["date"] . '<br>';
          echo '<span>Event Name: </span>' . $row["event_name"] . '<br>';
          echo '<span>Room: </span>' . $row["room"] . '<br>';
          echo '<span>Event ID: </span>' . $row["event_id"] . '<br>';
          echo '</div>';
      }
  } else {
      echo "No events found";
  }

  // Close connection
  $conn->close();
  ?>
</div>

</body>
</html>
