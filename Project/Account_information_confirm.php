





<html>

<body>

  <center>
    <H1>Here is your account information！</H1>
    <table border="2">
  <?php
  include 'connect.php';
  

 $get_account_number = "SELECT Account_Number FROM Account WHERE Account.Customer_id = '$row[Customer_id]'";
 $get_Account_number = mysqli_query($conn, $get_account_number);
 $account_number = mysqli_fetch_assoc($get_Account_number);


 $get_branch_name = "SELECT Branch_name FROM Branch WHERE Branch.Branch_id = (SELECT Branch_id FROM Account WHERE Account_Number = '$account_number[Account_Number]')";
 $get_Branch_name = mysqli_query($conn, $get_branch_name);
 $branch_name = mysqli_fetch_assoc($get_Branch_name);



       echo '<tr>';
       echo '<td>'; echo "Account Number:"; echo'</td>';
       echo '<td>'; echo $account_number['Account_Number']; echo '</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Branch Name:"; echo'</td>';
       echo '<td>'; echo $branch_name['Branch_name']; echo '</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Customer Name:"; echo'</td>';
       echo '<td>'; echo $customer_name; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Customer Phone:"; echo'</td>';
       echo '<td>'; echo $customer_phone; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Customer emil:"; echo'</td>';
       echo '<td>'; echo $customer_email; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Customer Address:"; echo'</td>';
       echo '<td>'; echo $customer_address; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Account Type:"; echo'</td>';
       echo '<td>'; echo $account_type; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Balance:"; echo'</td>';
       echo '<td>'; echo $deposit_amount; echo'</td>';
       echo '<tr>';

       echo '<tr>';
       echo '<td>'; echo "Online User Name:"; echo'</td>';
       echo '<td>'; echo $online_user_name; echo'</td>';
       echo '<tr>';



  ?>
</table>
      <br>
      <button style="font-size:100%;" onclick="window.location='home_page_1.php'; return false">confirm</button>&nbsp

</center>
</body>
</html>
