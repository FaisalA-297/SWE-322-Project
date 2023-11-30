

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
session_start();
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $specialty = $_POST['specialty'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sqlExistingAppointment = "SELECT appointment_id FROM Appointments 
    WHERE user_id = (SELECT user_id FROM Users WHERE name='$username') 
    AND booking_status = 'confirmed'";

$resultExistingAppointment = $conn->query($sqlExistingAppointment);

if ($resultExistingAppointment->num_rows > 0) {
    echo "You already have an existing appointment. You cannot book another one.";
} else {

    
    $sqlDoctor = "SELECT doctor_id FROM Doctors WHERE specialty='$specialty'";
    $resultDoctor = $conn->query($sqlDoctor);

    if ($resultDoctor->num_rows > 0) {
        $rowDoctor = $resultDoctor->fetch_assoc();
        $doctor_id = $rowDoctor['doctor_id'];

        $sqlExistingDoctorAppointment = "SELECT appointment_id FROM Appointments
                WHERE doctor_id = $doctor_id
                AND date = '$date'
                AND time = '$time'";

            $resultExistingDoctorAppointment = $conn->query($sqlExistingDoctorAppointment);

            if ($resultExistingDoctorAppointment->num_rows > 0) {
                echo "The doctor is already booked at the same day and time. Please choose a different date and time.";
            } else {

    // insert appointment
    $sqlAppointment = "INSERT INTO appointments ( date, time, user_id, booking_status, doctor_id) 
            VALUES ( '$date', '$time',(SELECT user_id FROM users WHERE name='$username'), 'confirmed', '$doctor_id')";

    if ($conn->query($sqlAppointment) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sqlAppointment . "<br>" . $conn->error;
    }
}
} else {
    echo "Error: No doctor found for the selected specialty.";
}
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