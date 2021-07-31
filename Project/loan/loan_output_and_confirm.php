<html>

<body>

<center>

<table border = "2">

<?php

include 'loan_connect_database.php';


?>

<?php
echo $account_number;
echo $account_password;
echo $loan_type;
echo $loan_amount;
echo $loan_date;
echo $repayment_date;


$get_Customer_id = "SELECT Customer_id FROM Account Where Account_Number = '$account_number';";
$get_customer_id = mysqli_query($conn, $get_Customer_id);
$customer_id = mysqli_fetch_assoc($get_customer_id);


$get_Branch_id = "SELECT Branch_id FROM Account Where Account_Number = '$account_number';";
$get_branch_id = mysqli_query($conn, $get_Branch_id);
$branch_id = mysqli_fetch_assoc($get_branch_id);

$set_Loan_info = "INSERT INTO Loan VALUES (Set_Loan_id(), '$loan_type', '$loan_amount', '$loan_date', '$repayment_date', '$branch_id[Branch_id]', '$customer_id[Customer_id]');";
mysqli_query($conn, $set_Loan_info);

$get_Loan_id = "SELECT Loan_id FROM Loan WHERE Loan_type = '$loan_type' and Loan_amount = '$loan_amount' and Loan_date = '$loan_date' and Repayment_date = '$repayment_date' and Branch_id = '$branch_id[Branch_id]' and Customer_id = '$customer_id[Customer_id]';";
$get_loan_id = mysqli_query($conn, $get_Loan_id);
$loan_id = mysqli_fetch_assoc($get_loan_id);


$update_balance = "UPDATE Account
                   SET Balance = Balance + $loan_amount where Account_Number = '$account_number'";

mysqli_query($conn, $update_balance);

$get_balance = "SELECT Balance FROM Account WHERE Account_Number ='$account_number'";
$get_Balance = mysqli_query($conn, $get_balance);
$balance = mysqli_fetch_assoc($get_Balance);

echo "Loan successfully!";

echo '<tr>';
echo '<td>'; echo "Loan ID:"; echo'</td>';
echo '<td>'; echo $loan_id['Loan_id']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Type:"; echo'</td>';
echo '<td>'; echo $loan_type; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Amount:"; echo'</td>';
echo '<td>'; echo $loan_amount; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Loan Date:"; echo'</td>';
echo '<td>'; echo $loan_date; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Repayment Date:"; echo'</td>';
echo '<td>'; echo $repayment_date; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Branch ID:"; echo'</td>';
echo '<td>'; echo $branch_id['Branch_id']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Customer ID:"; echo'</td>';
echo '<td>'; echo $customer_id['Customer_id']; echo '</td>';
echo '<tr>';

echo '<tr>';
echo '<td>'; echo "Balance:"; echo'</td>';
echo '<td>'; echo $balance['Balance']; echo '</td>';
echo '<tr>';

 ?>

</table>

<button style="font-size:100%;" onclick="window.location='../home_page_1.php'; return false">confirm</button>&nbsp

</center>
</body>



</html>
