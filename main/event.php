<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Church event calendar</title>
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

  .add-event-form {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="date"],
  input[type="text"],
  select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<h2>Church Calendar</h2>

<!-- Add Event Form -->
<form action="event_data.php" method="POST" class="add-event-form">
  <label for="event-date">Date:</label>
  <input type="date" id="event_date" required name="date"><br>
  <label for="event-name">Event Name:</label>
  <input type="text" id="event_name" required name="event_name"><br>
  <label for="room">Room:</label>
  <select id="room" required name="room">
    <option value="main-hall">Main Hall</option>
    <option value="meeting-room">Meeting Room</option>
    <option value="chapel">Chapel</option>
  </select><br>
  <label for="event-id">Event ID:</label>
  <input type="text" id="event_id" required name="event_id"><br>

  <input type="submit" value="Submit">
</form>

<!-- Button to toggle add event form -->

</body>
</html>
