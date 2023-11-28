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
    <form action="register.php" method="post" name="form1">
    <div class="container">
    <div class="textbox">
    <div class="text-background">
        <table width="25%">
            <tr>
                <td>name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="register" value="register"></td>
                <?php
                include_once("db_config.php");

                if (isset($_POST['register'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    //check if email already exists, throw error
                    $email_result = mysqli_query($conn, "SELECT email, password FROM users WHERE email ='$email'");
                    //count number of users/row returned by query 
                    $user_matched = mysqli_num_rows($email_result);
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    //check if user matched/exist
                    if ($user_matched > 0) {
                        echo "<br> <strong> Error: </strong> User already exists with email id '$email'.";
                    } else
                    echo "register succssful <br>";
                    $result = mysqli_query($conn, "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')");
                    
                }
                        
                        ?>
            </tr>
        </table>
</div>
</div>
</div>
    </form>
    <a href="login.php">Login</a>

<!-- Footer -->
<footer class="footer">
  <div class="copyright">
      &copy; 2023 Hospital Booking. All Rights Reserved.
  </div>
</footer>

<script src="src/JS.js"></script>

</body>
   
</html>