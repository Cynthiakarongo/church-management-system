<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Management</title>
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
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
