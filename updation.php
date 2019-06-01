<?php
$size= sizeof($_POST);
$records=$size/4;
echo "no. of records=$records"; 
for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}



$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($i=1;$i<=$records;$i++)
{
	$q="UPDATE book SET title='$title[$i]', price=$price[$i], author='$author[$i]' where bookid=$bookid[$i]";
	mysqli_query($con,$q);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>Updation</title>
</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
	<p><?php
			echo "record Updated";
		
		?>
	</p>
	<h3>do you want to Update more record<a href="updateForm.php">click here</a></h3><br/>
	<h3>Go back to home page<a href="Home.php">click here</a></h3>
	
	</body>
</html>