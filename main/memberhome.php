<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEMBER DASHBOARD</title>
    <style>
        /* Body styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

       /* Header styles */
.header {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header a {
    text-decoration: blue;
    color: white;
    font-weight: bold;
    font-size: 20px;
}

.logout a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
}


        /* Aside (sidebar) styles */
        aside {
            background-color: #333;
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

        aside li:last-child {
            border-bottom: none;
        }

        aside a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        aside a:hover {
            background-color: #555;
        }

        /* Main content styles */
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            aside {
                width: 100%;
                height: auto;
                position: relative;
            }

            .header {
                flex-direction: column;
                align-items: center;
            }

            .header a {
                margin-bottom: 10px;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<header class="header">
    <a href="">MEMBER DASHBOARD</a>

    <div class="logout">
        <a href="logout.php">logout</a>
    </div>
</header>

<aside>
    <ul>
        <li>
            <a href="">Member management</a>
        </li>

        <li>
            <a href="">Contribution tracking</a>
        </li>

        <li>
            <a href="eventmember.php">Event management</a>
        </li>

        <li>
            <a href="announcements.php">Communication</a>
        </li>

        <li>
            <a href="">Volunteer Management</a>
        </li>

        <li>
            <a href="groups_1.php">Small groups/Ministries</a>
        </li>

        <li>
            <a href="">Children's check-in</a>
        </li>

        <li>
            <a href="s&m_management.php">Sermon and Media</a>
        </li>
    </ul>
</aside>

</body>
</html>
s