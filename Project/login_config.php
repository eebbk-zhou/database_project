<?php
include 'connect.php';


$username_ = $_POST["login_username"];
$password_ = $_POST["login_password"];



$sql = "SELECT user_name, Password  FROM Login where user_name='$username_' and Password= '$password_';";

$result = $conn->query($sql);

$check = mysqli_fetch_array($result);


if(isset($check)){

	include 'home_page_1.php';
}

else
{
	include 'ask_signup.php';


}


 ?>
