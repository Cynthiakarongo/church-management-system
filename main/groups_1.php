<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
       function editGroup(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            for (var i = 0; i < cells.length - 1; i++) {
                var cellValue = cells[i].innerHTML;
                cells[i].innerHTML = "<input type='text' value='" + cellValue + "'>";
            }
            button.innerHTML = "Cancel";
            button.onclick = function () { cancelEdit(button) };
        }

        function saveGroup(button) {
            var row = button.parentNode.parentNode;
            var inputs = row.getElementsByTagName("input");
            var values = [];
            for (var i = 0; i < inputs.length; i++) {
                values.push(inputs[i].value);
            }

            // Save to database logic here (not implemented in this example)
            alert("Updated successfully."); // Display alert
            restoreRow(row);
        }

        function cancelEdit(button) {
            var row = button.parentNode.parentNode;
            restoreRow(row);
        }

        function restoreRow(row) {
            var cells = row.getElementsByTagName("td");
            for (var i = 0; i < cells.length - 1; i++) {
                var input = cells[i].querySelector("input");
                if (input) {
                    cells[i].innerHTML = input.value;
                }
            }
            var editButton = row.querySelector("button");
            editButton.innerHTML = "Edit";
            editButton.onclick = function () { editGroup(editButton) };
        }
</script>
</head>
<body>
    

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
    echo "<thead><tr><th>Group Name</th><th>Leader </th><th>Meeting Day</th><th>Meeting Time</th>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["group_name"] . "</td>";
        echo "<td>" . $row["leader"] . "</td>";
        echo "<td>" . $row["meeting_day"] . "</td>";
        echo "<td>" . $row["meeting_time"] . "</td>";
       
        echo "<td><button onclick='editGroup(this)'>Edit</button> <button onclick='saveGroup(this)'>Save</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No groups found.";
}
$conn->close();
?>
</body>
</html>