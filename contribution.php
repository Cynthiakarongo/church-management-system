<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Church Contribution Management</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

h1, h2 {
  color: #333;
}

#contributionForm, #givingHistory {
  margin-bottom: 40px;
}

form {
  margin-bottom: 20px;
}

label {
  display: inline-block;
  width: 150px;
}

input[type="text"],
input[type="number"] {
  width: 200px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

  </style>
</head>
<body>
  <h1>Welcome to Church Contribution Management</h1>

  <div id="contributionForm">
    <h2>Record Contribution</h2>
    <form action="data_contribution.php" method="POST" id="recordContributionForm">
      <label for="memberID">Member ID:</label>
      <input type="text" id="memberID" name="member_id"><br><br>
      
      <label for="donationAmount">Donation Amount:</label>
      <input type="text" id="donationAmount" name="donation_amount"><br><br>

      <label for="pledgeAmount">Pledge Amount:</label>
      <input type="text" id="pledgeAmount" name="pledge_amount"><br><br>

      <input type="submit" value="Record Contribution">
    </form>
  </div>

  <div id="givingHistory">
    <h2>Giving History</h2>
    <table id="historyTable">
      <!-- Table for displaying giving history will be populated dynamically using JavaScript -->
    </table>
  </div>

</body>
</html>
