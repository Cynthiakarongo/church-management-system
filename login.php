<!DOTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login form</title>
  <style type="text/css">
    
      .login_form
      {
        background-color: blueviolet;
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px;
      }
      .title_deg
      {
        background-color: black;
        color:white;
        text-align: center;
        font-weight: bold;
        width: 400px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 20px;
      }
    
  </style>
</head>
<body background="img5.jpg">
<center>
  <div>
    <center class="title_deg">
      login form
      
    </center>
    <form action="login_check.php" method="POST"class="login_form">

      <div>
        <label>username</label>
        <input type="text" name="username">
      </div>

      <div>
        <label>password</label>
        <input type="password" name="password">
      </div>

      <div>

        <input type="submit"name="submit">
      </div>
    </form>
  </div>
</center>
<p>Go backto the login page  <a href="index.php">Back</a></p>
</body>