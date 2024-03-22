<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <style type="text/css">
    body {
      background-image: url('img5.jpg'); /* Background image */
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif; /* Default font family */
      margin: 0;
      padding: 0;
    }

    .login_form {
      background-color: rgba(255, 255, 255, 0.5); /* Transparent white background */
      backdrop-filter: blur(10px); /* Blur effect for modern browsers */
      border-radius: 10px; /* Rounded corners */
      width: 400px;
      height: 350px;
      display: flex;
      flex-direction: column; /* Align items vertically */
      justify-content: center;
      align-items: center;
      margin: auto; /* Center the form horizontally */
      margin-top: 50px; /* Add some top margin */
      padding: 20px;
    }

    .title_deg {
      background-color: rgba(0, 0, 0, 0.8); /* Dark background for title */
      color: white;
      text-align: center;
      font-weight: bold;
      width: 100%; /* Full width */
      padding: 10px 0; /* Add padding top and bottom */
      font-size: 24px; /* Increase font size */
      border-top-left-radius: 10px; /* Rounded corners for top left and right */
      border-top-right-radius: 10px;
    }

    .login_form div {
      margin-bottom: 20px; /* Add space between form elements */
    }

    .login_form label {
      font-weight: bold;
    }

    .login_form input[type="text"],
    .login_form input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login_form input[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s; /* Smooth transition */
    }

    .login_form input[type="submit"]:hover {
      background-color: #0056b3; /* Darker shade on hover */
    }
  </style>
</head>
<body>

<div class="title_deg">
  Login Form
</div>

<form action="login_check.php" method="POST" class="login_form">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>

  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>

  <div>
    <input type="submit" name="submit" value="Submit">
  </div>
</form>

<p>Go back to the login page <a href="index.php">Back</a></p>

</body>
</html>
