

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home page</title>

</head>

<body>

  <link rel="stylesheet" href="../src/stylesheet.css">

    <!-- Banner -->
    <div class="banner">
      <img src="../src/images/banner.jpeg" alt="Banner Image">
  </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
          <li><a href="../after_login.php">Home</a></li>
          <li><a href="../booking.php">Booking</a></li>
            <div class="right">
            <li><a href="../account_page.php">Account</a></li>
                <li><a href="../index.php">log out</a></li>
          </div>
        </ul>
    </nav>

<!--Body starts here-->
<div class="container">
  <div class="textbox">
    <div class="text-background">
<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the appointment ID
    $appointmentId = $_GET['AppointmentId'];

    // Delete appointment
    $sqlDeleteAppointment = "DELETE FROM Appointments WHERE Appointment_id = $appointmentId";

    if ($conn->query($sqlDeleteAppointment) === TRUE) {
        echo "Appointment canceled successfully!";
    } else {
        echo "Error: " . $sqlDeleteAppointment . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
</div>
  </div>
  </div>
  
<!-- Footer -->
<footer class="footer">
  <div class="copyright">
      &copy; 2023 Hospital Booking. All Rights Reserved.
  </div>
</footer>

<script src="src/JS.js"></script>

</body>
</html>