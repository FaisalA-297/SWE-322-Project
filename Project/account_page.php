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
                <li><a href="index.php">log out</a></li>
              </div>
        </ul>
    </nav>

    <!--Body starts here-->
    <div class="container">
  <div class="textbox">
    <div class="text-background">
      
    <?php
   
   session_start();
   include 'config/db_config.php';
   
   if (isset($_SESSION['username'])) {
       $username = $_SESSION['username'];
   
       // Perform SQL query to get user appointments
       $sql = "SELECT Appointments.*, Doctors.doctor_name 
            FROM Appointments 
            INNER JOIN Doctors ON Appointments.doctor_id = Doctors.doctor_id
            WHERE Appointments.user_id = (SELECT user_id FROM Users WHERE name='$username')";
       $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           // Display user details
           echo "<p>Name: $username</p>";
   
           // Display appointment information
           while ($row = $result->fetch_assoc()) {
               echo "<div>";
               echo "<br>";
               echo "<h3>Appointment details<h3>";
               echo "<p>Date: " . $row['date'] . "</p>";
               echo "<p>Time: " . $row['time'] . "</p>";
               echo "<p>Doctor Name: " . $row['doctor_name'] . "</p>";

               if (isset($row['Appointment_id'])) {
                echo "<button onclick=\"cancelAppointment(" . $row['Appointment_id'] . ")\">Cancel Appointment</button>";
            } else {
                echo "<p>Error: Appointment ID not found.</p>";
            }
               echo "</div>";
           }
       } else {
           echo "<p>Name: $username</p>";
           echo "<p>No appointments found.</p>";
       }
   } else {
       echo "User not logged in.";
   }
   ?>
   <script>
   function cancelAppointment(appointmentId) {
    var confirmation = confirm("Are you sure you want to cancel this appointment?");
    if (confirmation) {
        // Implement logic to cancel the appointment
        // You can use AJAX to send a request to the server to handle the cancellation
        // For simplicity, redirect to a PHP script that handles the cancellation

        window.location.href = "config/cancel_appointment.php?AppointmentId=" + appointmentId;
    }
}
</script>
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