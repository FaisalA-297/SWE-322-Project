<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$host_ip = "localhost:3306";
$username = "root";
$password = "";
$database = "hospital_db";

$conn = mysqli_connect($host_ip,$username,$password,$database);

if (!$conn){

  echo "Connection Failed";

}




?>
    
</body>
</html>