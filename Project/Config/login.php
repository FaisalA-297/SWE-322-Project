<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>

<link rel="stylesheet" href="../src/stylesheet.css">
<div id="page-container">
   <div id="content-wrap">
    <!-- Banner -->
    <div class="banner">
      <img src="../src/images/banner.jpeg" alt="Banner Image">
  </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="../index.php">Home</a></li>
              <div class="right">
                <li><a href="login.php">Sign in</a></li>
                <li><a href="register.php">Register</a></li>
              </div>
        </ul>
    </nav>

    <!--Body starts here-->
    <form action="process_login.php" method="post">
<div class="container">
  <div class="textbox">
    <div class="text-background">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
    <br>
    <a href="register.php">Register</a>
</div>
  </div>
    </div>
</form>

    

<!-- Footer -->
<footer class="footer">
  <div class="copyright">
      &copy; 2023 Hospital Booking. All Rights Reserved.
  </div>
  </div>
</footer>
</div>

<script src="src/JS.js"></script>
</body>

</html>