<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children Check-In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Children Check-In</h2>
    <form action="data_check-in.php" method="POST">
        <label for="child_name">Child's Name:</label>
        <input type="text" id="child_name" name="child_name"><br><br>

        <label for="guardian_name">Guardian's Name:</label>
        <input type="text" id="guardian_name" name="guardian_name"><br><br>

        <label for="guardian_email">Guardian's Email:</label>
        <input type="email" id="guardian_email" name="guardian_email"><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number"><br><br>

        <input type="submit" value="Check-In">
    </form>
</body>
</html>
