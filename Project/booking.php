<?php

include_once("config/db_config.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bookinge</title>

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
<form method="post" action="config/booking_process.php">
<div class="title">Booking</div>
<span class="inputs">
          <span class="inputf">
    <label for="specialty">Select a Doctor:</label>
    <select class="input" name="specialty" id="specialty">
    <?php
    $result = $conn->query("SELECT specialty FROM doctors");

while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['specialty'] . "'>" . $row['specialty'] . "</option>";
}

?>
</select>

<span class="inputf">
    <label for="specialty">Select a Doctor:</label>
    <input class="input" type="date" name="date" id="date">

    <span class="inputf">
    <label for="specialty">Select a Doctor:</label>
    <input class="input" type="time" name="time" id="time">

        <input class="btn" type="submit" value="Book Appointment">

</div>
</form>
</div>

<!-- Footer -->
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="src/JS.js"></script>

</body>
</html>