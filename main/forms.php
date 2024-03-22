<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Event Registration and Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
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
    <h2>Event Registration</h2>
    <form action="registration_process.php" method="POST">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>

        <label for="event_name">Event Name:</label>
        <input type="text" id="event_name" name="event_name" required>

        <input type="submit" value="Register">
    </form>

    <h2>Custom Survey</h2>
    <form action="survey_process.php" method="POST">
        <label for="survey_question">Survey Question:</label>
        <textarea id="survey_question" name="survey_question" required></textarea>

        <label for="survey_options">Options (comma-separated):</label>
        <input type="text" id="survey_options" name="survey_options" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
