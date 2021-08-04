<html>

<body>

<center>


<?php

include 'delete_connect_database.php';


?>

<?php

$get_Customer_id = "SELECT Customer_id FROM Account Where Account_Number = '$account_number';";
$get_customer_id = mysqli_query($conn, $get_Customer_id);
$customer_id = mysqli_fetch_assoc($get_customer_id);


$get_Loan_id = "SELECT * FROM Loan WHERE Customer_id = '$customer_id[Customer_id]';";
$get_loan_id = mysqli_query($conn, $get_Loan_id);
$loan_id = mysqli_fetch_assoc($get_loan_id);


if($loan_id['Loan_amount'] > 0){

  echo "You cannot close your account until you pay off your loan!";
}
else{
  $delete_loan = "DELETE FROM Loan WHERE Loan_id = '$loan_id[Loan_id]'";
  mysqli_query($conn, $delete_loan);
  

  $delete_account = "DELETE FROM Account WHERE Account_Number = '$account_number'";
  mysqli_query($conn, $delete_account);

  $delete_customer_info = "DELETE FROM Customer WHERE Customer_id = '$customer_id[Customer_id]'";
  mysqli_query($conn, $delete_customer_info);

  echo "Close account successful!";

}


 ?>

<br/>

<button style="font-size:100%;" onclick="window.location='../home_page_1.php'; return false">confirm</button>&nbsp

</center>
</body>



</html>
