<?php

include_once("db_config.php");
$specialty = $_GET["specialty"];
$date = $_GET["date"];
$time = $_GET["time"];



// Insert data into the appointment table
$sql = "INSERT INTO appointments (date, time, booking_status) VALUES ( '$date', '$time', 'confirmed')";

?>

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
            <li><a href="booking.php">Booking</a></li>
              <div class="right">
                <li><a href="../index.php">logout</a></li>
              </div>
        </ul>
    </nav>

    <!--Body starts here-->
    
    <!-- Text Box -->

    <div class="container">
      <div class="textbox">
        <div class="text-background">
          
            <?php
        if ($conn->query($sql) === TRUE) {
    echo "Your appointment has been booked!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
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