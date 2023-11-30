<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li><a href="../index.php">Home</a></li>
              <div class="right">
                <li><a href="login.php">Sign in</a></li>
                <li><a href="register.php">Register</a></li>
              </div>
        </ul>
    </nav>

    <!--Body starts here-->
    <body>
    <form action="register.php" method="post">
    <div class="container">
    <div class="textbox">
    <div class="text-background">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Register">
    <?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform SQL query to insert user data into the Users table
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    // Add your error handling and validation here

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
    <br>
    <a href="login.php">Login</a>
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