<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Church Attendance</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="date"],
  input[type="number"],
  input[type="text"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="submit"] {
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Church Attendance</h2>

  <form action="submit_attendance.php" method="post">
    <label for="service_date">Service Date:</label>
    <input type="date" id="service_date" name="service_date" required>

    <label for="service_type">Service Type:</label>
    <input type="text" id="service_type" name="service_type" required>

     <label for="attendance_count">Attendance Count:</label>
    <input type="number" id="attendance_count" name="attendance_count" required>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
