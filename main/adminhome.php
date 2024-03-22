<?php
require_once('adminhome_backend.php');
    //$members = get_Members();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
    aside {
        background-color: #842afa;
            color: #fff;
            width: 200px;
            height: 100%;
            position: fixed;
            top: 30;
            left: 0;
            padding-top: 30px;
}
aside ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        aside li {
            padding: 10px 20px;
            border-bottom: 1px solid #666;
        }
.header a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 20px;
}

.logout a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

ul li {
    padding: 10px 20px;
    border-bottom: 1px solid #ddd;
}

ul li:last-child {
    border-bottom: none;
}

ul li a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}

ul li a:hover {
    background-color: #f2f2f2;
}

.content {
    padding: 20px;
    margin-top: 20px;
    float: right; /* Float the content to the right */
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
}

table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

table td {
    text-align: center;
}
</style>
</head>
<body>

<header class="header">
    <a href="">Admin Dashboard</a>
    <div class="logout">
        <a href="logout.php">logout</a>
    </div>
</header>



<aside> <ul>   
    <li>
        <a href="membermanagement.php">Member management</a>
    </li>
    <li>
        <a href="attendance.php">Attendance tracking</a>
    </li>
    <li>
        <a href="contribution.php">Contribution tracking</a>
    </li>
    <li>
        <a href="event.php">Event management</a>
    </li>
    <li>
        <a href="communication.php">Communication</a>
    </li>
    <li>
        <a href="Volunteer.php">Volunteer Management</a>
    </li>
    <li>
        <a href="groups.php">Small groups/Minstries</a>
    </li>
    <li>
        <a href="children's check-in.php">Children's check-in</a>
    </li>
    <li>
        <a href="sermon.php">Sermon and Media</a>
    </li>
    <li>
        <a href="forms.php">Registration and forms</a>
    </li>
    <li>
        <a href="reports_fetch.php">Reports and Analytics</a>
    </li>
</ul></aside>

<div class="content" style="padding-right:100px">
    <table>
        <tr>
            <th>full_name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>date_of_birth</th>
            <th>membership_type</th>
            <th>gender</th>
        </tr>
        <?php 
            // $members = get_Members();
            foreach ($member['result'] as $member): ?>
                <tr>
                    <td><?= $member['full_name'] ?></td>
                    <td><?= $member['email'] ?></td>
                    <td><?= $member['phone'] ?></td>
                    <td><?= $member['address'] ?></td>
                    <td><?= $member['date_of_birth'] ?></td>
                    <td><?= $member['membership_type'] ?></td>
                    <td><?= $member['gender'] ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</div>

</body>
</html>
