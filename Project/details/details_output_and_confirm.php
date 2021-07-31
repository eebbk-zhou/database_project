<html>

<body>

<center>

<table border = "2">

<?php

include 'details_connect_database.php';


?>

<?php


$get_Customer_id = "SELECT Customer_id FROM Account Where Account_Number = '$account_number';";
$get_customer_id = mysqli_query($conn, $get_Customer_id);
$customer_id = mysqli_fetch_assoc($get_customer_id);


$get_Branch_id = "SELECT Branch_id FROM Account Where Account_Number = '$account_number';";
$get_branch_id = mysqli_query($conn, $get_Branch_id);
$branch_id = mysqli_fetch_assoc($get_branch_id);

$get_Loan_id = "SELECT Loan_id FROM Loan WHERE Branch_id = '$branch_id[Branch_id]' and Customer_id = '$customer_id[Customer_id]';";
$get_loan_id = mysqli_query($conn, $get_Loan_id);
$loan_id = mysqli_fetch_assoc($get_loan_id);



$get_Bank_info = "SELECT * FROM Branch WHERE Branch_id = '$branch_id[Branch_id]';";
$get_bank_info = mysqli_query($conn, $get_Bank_info);
$bank_info = mysqli_fetch_assoc($get_bank_info);

$get_Loan_info = "SELECT * FROM Loan WHERE Loan_id = '$loan_id[Loan_id]';";
$get_loan_info = mysqli_query($conn, $get_Loan_info);
$loan_info = mysqli_fetch_assoc($get_loan_info);


$get_Account_info = "SELECT * FROM Account WHERE Account_Number = '$account_number';";
$get_account_info = mysqli_query($conn, $get_Account_info);
$account_info = mysqli_fetch_assoc($get_account_info);

$get_Customer_info = "SELECT * FROM Customer WHERE Customer_id = '$customer_id[Customer_id]';";
$get_customer_info = mysqli_query($conn, $get_Customer_info);
$customer_info = mysqli_fetch_assoc($get_customer_info);



echo "Account Details:";


echo '<tr>';
echo '<td>'; echo "Bank:"; echo'</td>';
echo '<td>'; echo "Kent Star Bank"; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Branch Name:"; echo'</td>';
echo '<td>'; echo $bank_info['Branch_name']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Branch ID:"; echo'</td>';
echo '<td>'; echo $bank_info['Branch_id']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Branch Address:"; echo'</td>';
echo '<td>'; echo $bank_info['Branch_address']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Account Number:"; echo'</td>';
echo '<td>'; echo $account_number; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Account Type:"; echo'</td>';
echo '<td>'; echo $account_info['Account_type']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Balance:"; echo'</td>';
echo '<td>'; echo $account_info['Balance']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer ID:"; echo'</td>';
echo '<td>'; echo $customer_info['Customer_id']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer Name:"; echo'</td>';
echo '<td>'; echo $customer_info['Customer_name']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer Phone:"; echo'</td>';
echo '<td>'; echo $customer_info['Customer_phone']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer Emil:"; echo'</td>';
echo '<td>'; echo $customer_info['Customer_email']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer Address:"; echo'</td>';
echo '<td>'; echo $customer_info['Customer_address']; echo'</td>';
echo '<tr>';


echo '<tr>';
echo '<td>'; echo "Online User Name:"; echo'</td>';
echo '<td>'; echo $customer_info['User_name']; echo'</td>';
echo '<tr>';


if($loan_info['Loan_amount'] > 0){
echo '<tr>';
echo '<td>'; echo "Loan ID:"; echo'</td>';
echo '<td>'; echo $loan_info['Loan_id']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Type:"; echo'</td>';
echo '<td>'; echo $loan_info['Loan_type']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Amount:"; echo'</td>';
echo '<td>'; echo $loan_info['Loan_amount']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Date:"; echo'</td>';
echo '<td>'; echo $loan_info['Loan_date']; echo'</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Repayment Date:"; echo'</td>';
echo '<td>'; echo $loan_info['Repayment_date']; echo'</td>';
echo '<tr>';

}
 ?>

</table>

<button style="font-size:100%;" onclick="window.location='../home_page_1.php'; return false">confirm</button>&nbsp

</center>
</body>



</html>
