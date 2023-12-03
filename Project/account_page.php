<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Account</title>

</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="src/stylesheet.css">
    <!-- Navigation Bar -->
 
    <ul class="nav navbar navbar-expand-sm justify-content-center sticky-top">
  <li class="nav-item">
    <a class="nav-link active" href="after_login.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="booking.php">Booking</a>
  </li>
  <a class="navbar-brand" href="after_login.php">
  <img src="src/images/Logo3.png" width="60" height="60" alt="Your Logo">
  </a>
  <li class="nav-item">
    <a class="nav-link" href="account_page.php">Account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="config/logout.php">Logout</a>
  </li>
  
</ul>

    <!--Body starts here-->
    <div class="content">
    <div class="center">
    <div class="flexible-container">
      
    <?php
   
   session_start();
   include 'config/db_config.php';
   
   if (isset($_SESSION['username'])) {
       $username = $_SESSION['username'];
   
       // Get user appointments
       $sql = "SELECT Appointments.*, Doctors.doctor_name 
            FROM Appointments 
            INNER JOIN Doctors ON Appointments.doctor_id = Doctors.doctor_id
            WHERE Appointments.user_id = (SELECT user_id FROM Users WHERE name='$username')";
       $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           // Display user details
           echo "<h3>Hello, $username</h3>";
           echo "<br>";
   
           // Display appointment information
           while ($row = $result->fetch_assoc()) {

               echo "<h2>Here are your appointment details:<h2>";
               echo "<h3>Date: " . $row['date'] . "</h3>";
               echo "<h3>Time: " . $row['time'] . "</h3>";
               echo "<h3>Doctor Name: Dr. " . $row['doctor_name'] . "</h3>";

               if (isset($row['Appointment_id'])) {
                echo "<button class='button_s'style='font-size : 20px; width: 50%; height: 50px;' onclick=\"cancelAppointment(" . $row['Appointment_id'] . ")\">Cancel Appointment</button>";
            } 

           }
       } else {
           echo "<h3>Hello, $username</h3>";
           echo "<h3>You have no booked appointments.</h3>";
       }
   } 
   ?>
   <script>
   function cancelAppointment(appointmentId) {
    var confirmation = confirm("Are you sure you want to cancel this appointment?");
    if (confirmation) {

        window.location.href = "config/cancel_appointment.php?AppointmentId=" + appointmentId;
    }
}
</script>
  </div>
  </div>
</div>
<!-- Footer -->
<div class= "footer">
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-6">
                      <a href="index.php">
                        <img src="src/images/Logo3.png" alt="Logo" class="logo mr-2">
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
<script src="src/JS.js"></script>

</body>
</html>