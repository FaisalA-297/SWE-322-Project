<?php

include_once("config/db_config.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home page</title>

</head>

<body>

  <link rel="stylesheet" href="src/stylesheet.css">

    <!-- Banner -->
    <div class="banner">
      <img src="src/images/banner.jpeg" alt="Banner Image">
  </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
          <li><a href="after_login.php">Home</a></li>
          <li><a href="booking.php">Booking</a></li>
            <div class="right">
            <li><a href="account_page.php">Account</a></li>
              <li><a href="index.php">logout</a></li>
          </div>
        </ul>
    </nav>

<!--Body starts here-->

<form method="post" action="config/booking_process.php">
<div class="container">
  <div class="textbox">
    <div class="text-background">
    <label for="specialty">Select a Doctor:</label>
    <select name="specialty" id="specialty">
    <?php
    $result = $conn->query("SELECT specialty FROM doctors");

while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['specialty'] . "'>" . $row['specialty'] . "</option>";
}

?>
</select>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date">

    <label for="time">Time:</label>
    <input type="time" name="time" id="time">

        <input type="submit" value="Book Appointment">

</div>
</div>
</div>

</form>

<!-- Footer -->
<footer class="footer">
  <div class="copyright">
      &copy; 2023 Hospital Booking. All Rights Reserved.
  </div>
</footer>

<script src="src/JS.js"></script>

</body>
</html>