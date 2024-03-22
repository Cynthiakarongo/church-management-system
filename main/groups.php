<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Add New Group</h2>
    <form id="addGroupForm" action="add_group.php" method="POST">
        <label for="group_name">Group Name:</label>
        <input type="text" id="group_name" name="group_name" required><br><br>
        
        <label for="leader">Leader:</label>
        <input type="text" id="leader" name="leader" required><br><br>
        
        <label for="meeting_time">Meeting Time:</label>
        <input type="text" id="meeting_time" name="meeting_time" required><br><br>

        <label for="meeting_day">Meeting Day:</label>
        <input type="text" id="meeting_day" name="meeting_day" required><br><br>
        
        <input type="submit" value="Add Group">
    </form>

    <button onclick="viewGroups()">View Groups</button>

    <script>
        function viewGroups() {
            // Redirect to a page where groups are displayed
            window.location.href = "view_groups.php";
        }
    </script>
</body>
</html>
