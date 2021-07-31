<?php
include 'connect.php';


$username = $_POST["sign_username"];
$password = $_POST["sign_password"];


$result = "INSERT INTO Login values('$username', '$password');";


mysqli_query($conn, $result);

if($result)
{
 include 'signup_success.php';
}
else{
  echo "Failed";
}



 ?>
