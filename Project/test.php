


<?php
include 'connect.php';
?>

<html>

<body>
<table border = "2">
<?php
$sql = "SELECT * FROM Customer;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	while($row = mysqli_fetch_assoc($result)){
echo '<tr>';
  	echo '<td>'; echo "User Name:"; echo'</td>';

     echo '<td>'.$row['Customer_name'].'</td>';
     echo '<tr>';
	}
}


?>
</table>
</body>
</html>
