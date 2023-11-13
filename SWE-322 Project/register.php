<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="register.php" method="post" name="form1">
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
            </tr>
        </table>
    </form>
    <a href="login.php">Login</a>
    <?php
    //including the config
    include_once("db_config.php");

    if (isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //check if email already exists, throw error
        $email_result = mysqli_query($conn, "SELECT email, password FROM users WHERE email ='$email'");
        //count number of users/row returned by query 
        $user_matched = mysqli_num_rows($email_result);
        //check if user matched/exist
        if ($user_matched > 0) {
            echo "<br> <strong> Error: </strong> User already exists with email id '$email'.";
        } else
        echo "register succssful <br>";
        $result = mysqli_query($conn, "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')");
        
    }
    ?>
</body>

</html>