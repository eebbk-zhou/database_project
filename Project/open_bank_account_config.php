<?php
include 'connect.php';


$customer_name = $_POST["customer_name"];
$customer_email = $_POST["customer_email"];
$customer_phone = $_POST["customer_phone"];
$customer_address = $_POST["customer_address"];
$account_type = $_POST["account_type"];
$account_password = $_POST["account_password"];
$deposit_amount = $_POST["deposit_amount"];
$online_user_name = $_POST["online_user_name"];
$choose_branch = $_POST["choose_branch"];



$set_Customer = "INSERT INTO Customer VALUES (null, '$customer_name', '$customer_email', '$customer_address', '$customer_phone', '$online_user_name');";
mysqli_query($conn, $set_Customer);


$get_customer_id = "SELECT Customer_id from Customer order by Customer_id DESC LIMIT 1";

$result = mysqli_query($conn, $get_customer_id);
$row = mysqli_fetch_assoc($result);

$set_Account = "INSERT INTO Account VALUES (Set_Account_number(), '$account_type', '$deposit_amount', '$row[Customer_id]', '$choose_branch', '$account_password');";
mysqli_query($conn, $set_Account);

include 'Account_information_confirm.php';




 ?>
