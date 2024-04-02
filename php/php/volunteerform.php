<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Volunteering Form</title>
    <link href="../css/volunteer.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Volunteer Form</h1>
        <form action="volunteer.php" name="myForm" onsubmit="return validateForm()" method="POST">
          <label for="name">Full name:<input type="text" id="name" name="fullname" ></label>
          <span id="fullnameError" class="error"></span>

          <label for="email">Email:<input type="email" id="email" name="email" ></label>
          <span id="emailError" class="error"></span>

          <label for="phone">Phone Number:<input type="text" id="phone" name="number" ></label>
          <span id="phoneError" class="error"></span>
          
          <label for="availability">Date of Availability:</label><input type="date" id="availability" name="date" >
          <label for="event">Preferred Event:</label>
          <select id="event" name="event" >
          <option value="">Select an event</option>
          <option value="event1">Event 1</option>
          <option value="event2">Event 2</option>
          <option value="event3">Event 3</option>
          </select>
          <label for="message">Why do you want to volunteer?<textarea id="message" name="message" ></textarea></label>
          <span id="noteError" class="error"></span>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
      <script src="../js/volunteers.js"></script>

</body>