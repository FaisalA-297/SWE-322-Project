<?php

include 'db_config.ph';

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Protect against SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Fetch user from database
$sql = "SELECT * FROM users WHERE name='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, set session and redirect to display page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: account_page.php");
} else {
    // Invalid credentials, redirect back to login page
    header("Location: login.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Form</h2>
<form action="process_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
