<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>update book records</title>
<link rel="stylesheet" href="./css/formType.css"/>

</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
	<form action="updation.php" method="post">
	<table id="view_table">
		<tr id="head1">
			<th>BOOK ID</th>
			<th>TITLE</th>
			<th>PRICE</th>
			<th>AUTHOR</th>
		</tr>
		<?php
		for($i=1;$i<=$num;$i++)
		{
			$row=mysqli_fetch_array($result);
		?>	
		<tr>
		<td><?php echo $row['bookid']?><input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row['bookid']?>" /></td>
		<td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['title'] ?>" /></td>
		<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price'] ?>" /></td>
		<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author'] ?>" /></td>
		</tr>
		<?php
		}
		?>
		<td colspan="5"><input type="submit" value="Update" /></td>
	</table>

	</form>
	<br/>
	<h3>Go back to home page<a href="Home.php">click here</a></h3>
	<div id="footer">

<h1>footer</h1>
</div>
</body>
</html>