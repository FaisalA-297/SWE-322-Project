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
<form action="login.php" method="post" name="form1">
<div class="container">
  <div class="textbox">
    <div class="text-background">
<table width="25%">
<tr>
<td>email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="login" value="login"></td>
<?php
session_start();
include_once("db_config.php");

if (isset($_POST['login'])) {
$email = $_POST['email'];
$password = $_POST['password'];
//check if user exists
$result = mysqli_query($conn, "SELECT email, password FROM users WHERE email ='$email' and password='$password'");
//count number of users/row returned by query
$user_matched = mysqli_num_rows($result);
//check if user matched/exist
if ($user_matched > 0) {
$_SESSION["email"] = $email;
header("location:../after_login.php");
} else
echo "User email or password is not matched <br>";
}
?>
</tr>
</table>
</div>
  </div>
    </div>
</form>
<a href="register.php">Register</a>
    

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