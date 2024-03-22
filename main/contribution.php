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
      background-color: #f5f5f5;
    }

    h1, h2 {
      color: #333;
      text-align: center;
    }

    #contributionForm, #givingHistory {
      margin-bottom: 40px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
      margin-bottom: 20px;
    }

    label {
      display: inline-block;
      width: 150px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      width: calc(100% - 170px); /* Adjusted width to accommodate label */
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
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

  

</body>
</html>
