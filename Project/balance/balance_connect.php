
<?php
include '../connect.php';
$account_number = $_POST['account_number'];
$account_password = $_POST['account_password'];



$sqlt = "SELECT Account_Number, Account_Password  FROM Account where Account_Number ='$account_number' and Account_Password = '$account_password';";
$result = mysqli_query($conn, $sqlt);
$check = mysqli_fetch_array($result);


if(!isset($check)){
  $conn->close();
  include 'balance_mistake_info.php';

}



?>
