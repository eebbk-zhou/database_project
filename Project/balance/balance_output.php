<html>

<body>

<center>

<table border = "2">

<?php

include 'balance_connect.php';
?>

<?php


$get_balance = "SELECT Balance FROM Account WHERE Account_Number ='$account_number'";

$get_Balance = mysqli_query($conn, $get_balance);

$balance = mysqli_fetch_assoc($get_Balance);


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
