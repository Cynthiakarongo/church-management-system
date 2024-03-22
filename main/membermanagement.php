<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Management</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
  }
  
  h2 {
    text-align: center;
    margin-top: 20px;
  }
  
  form {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  select,
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type="date"] {
    width: calc(100% - 18px);
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
    font-size: 16px;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  
  small {
    font-size: 80%;
    color: #888;
  }
</style>
</head>
<body>

<h2>Member Profile Management</h2>

<form action="mm_member.php" method="POST">
  <label for="fullName">Full Name:</label><br>
  <input type="text" id="fullName" name="full_name"><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  
  <label for="phone">Phone:</label><br>
  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
  <small>Format: 123-456-7890</small><br>
  
  <label for="address">Address:</label><br>
  <textarea id="address" name="address"></textarea><br>
  
  <label for="birthdate">Date_of_Birth:</label><br>
  <input type="date" id="birth_date" name="date_of_birth"><br>
  
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select><br>
  
  <label for="membership_type">Membership_type:</label><br>
  <input type="radio" id="membership_type1" name="membership_type" value="regular">
  <label for="membership_type1">Regular</label><br>
  <input type="radio" id="membership_type2" name="membership_type" value="visitor">
  <label for="membership_type2">Visitor</label><br>
  <input type="radio" id="membership_type3" name="membership_type" value="other">
  <label for="membership_type3">Other</label><br>


  <label for="id">id:</label><br>
  <input type="id" id="id" name="id"><br>

  
  <input type="submit" value="Submit">
</form>

</body>
</html>
