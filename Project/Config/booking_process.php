

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Confirm booking</title>

</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../src/stylesheet.css">

  

    <!-- Navigation Bar -->
   
    <ul class="nav navbar navbar-expand-sm justify-content-center sticky-top">
  <li class="nav-item">
    <a class="nav-link active" href="../after_login.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../booking.php">Booking</a>
  </li>
  <a class="navbar-brand" href="after_login.php">
    <img src="../src/images/Logo3.png" width="60" height="60" alt="Your Logo">
  </a>
  <li class="nav-item">
    <a class="nav-link" href="../account_page.php">Account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
  
</ul>

<!--Body starts here-->

<div class="content">
    <div class="center">
    <div class="flexible-container">
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
    echo "<h3>You already have an existing appointment. You cannot book another one.</h3>";
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
                echo "<h3>The doctor is already booked at the same day and time. Please choose a different date and time.</h3>";
            } else {

    // insert appointment
    $sqlAppointment = "INSERT INTO appointments ( date, time, user_id, booking_status, doctor_id) 
            VALUES ( '$date', '$time',(SELECT user_id FROM users WHERE name='$username'), 'confirmed', '$doctor_id')";

    if ($conn->query($sqlAppointment) === TRUE) {
        echo "<h3>Appointment booked successfully!</h3>";
    } else {
        echo "Error: " . $sqlAppointment . "<br>" . $conn->error;
    }
}
} 
}
    $conn->close();
}
?>
</div>
</div>
</div>
<!-- Footer -->
<div class="footer">
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-6">
                      <a href="index.php">
                        <img src="../src/images/Logo3.png" alt="Logo" class="logo mr-2">
                      </a>
                        <span class="copyright">© 2023 Crescent. All Rights Reserved.</span>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                            <a>Home</a>
                            </div>
                            <div class="col-md-4">
                            <a>Features</a>
                            </div>
                            <div class="col-md-4">
                            <a>Pricing</a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                            <a>About</a>
                            </div>
                            <div class="col-md-4">
                            <a>Contact</a>
                            </div>
                            <div class="col-md-4">
                            <a>FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../src/JS.js"></script>

</body>
</html>