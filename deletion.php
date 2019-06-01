<?php
	$size=sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++,$j++)
	{
		$index="b".$j;
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index];
		else
			$i--;
	}
	
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($k=1;$k<=$size;$k++)
{
	$q="delete from book where bookid=".$b_id[$k];
	mysqli_query($con,$q);
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
	<p><?php
			echo $size."record deleted";
		
		?>
	</p>
	<h3>do you want to Delete more record<a href="deleteForm.php">click here</a></h3><br/>
	<h3>Go back to home page<a href="Home.php">click here</a></h3>
</body>
</html>