<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>event management</title>
  <style>
    .calendar {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
    }
    .day {
      border: 1px solid #ccc;
      padding: 10px;
      min-height: 100px;
    }
  </style>
</head>
<body>
  <h1>Church Calendar</h1>
  
  <h2>Add Event</h2>
  <form id="eventForm">
    <label for="eventName">Event Name:</label>
    <input type="text" id="eventName" name="eventName" required><br><br>
    
    <label for="eventDate">Event Date:</label>
    <input type="date" id="eventDate" name="eventDate" required><br><br>
    
    <label for="eventDescription">Event Description:</label><br>
    <textarea id="eventDescription" name="eventDescription" rows="4" cols="50"></textarea><br><br>
    
    <button type="submit">Add Event</button>
  </form>
  
  <h2>Calendar</h2>
  <div class="calendar" id="calendar">
    <!-- Calendar will be generated here -->
  </div>

  <script>
    document.getElementById('eventForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const eventName = document.getElementById('eventName').value;
      const eventDate = document.getElementById('eventDate').value;
      const eventDescription = document.getElementById('eventDescription').value;

      const eventData = {
        name: eventName,
        date: eventDate,
        description: eventDescription
      };

      addEventToCalendar(eventData);
      clearForm();
    });

    function addEventToCalendar(eventData) {
      const calendar = document.getElementById('calendar');
      const eventDate = new Date(eventData.date);
      const day = eventDate.getDate();
      const month = eventDate.getMonth();
      const year = eventDate.getFullYear();
      const cellIndex = eventDate.getDay();

      const cell = calendar.children[day + cellIndex];
      const eventElement = document.createElement('div');
      eventElement.innerHTML = `<strong>${eventData.name}</strong><br>${eventData.description}`;
      cell.appendChild(eventElement);
    }

    function clearForm() {
      document.getElementById('eventName').value = '';
      document.getElementById('eventDate').value = '';
      document.getElementById('eventDescription').value = '';
    }
  </script>
</body>
</html>
