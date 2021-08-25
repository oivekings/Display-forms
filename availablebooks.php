<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Available books</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'list';
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM books";
$result=mysqli_query($connect, $sql);


?>

	echo '<table align="centre" border="1px" width="600px" line-height="30px" >
			<tr>
				<th colspan="4">Available books</th>
			</tr>

			<tr>
				<th>ID</th>
				<th>Book tittle</th>
				<th>Author</th>
				<th>Number of copies</th>
			</tr>';
		 <?php
		 
   		 while ($rows = $result->fetch_assoc())
   		  {
		
		 ?>   
			<tr>
				<td><?php echo $rows['ID']; ?> </td>
				<td> <?php echo $rows['Tittle']; ?>   </td>
				<td> <?php echo $rows['Author']; ?>  </td>
				<td> <?php echo $rows['Copies']; ?>  </td>
			</tr>
		<?php
		 }
		?> 
		  
	</table>	


	

</body>
</html>