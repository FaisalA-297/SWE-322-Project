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
header("location:page-1.php");
} else
echo "User email or password is not matched <br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<form action="login.php" method="post" name="form1">
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
</tr>
</table>
</form>
<a href="register.php">Register</a>
</body>

</html>