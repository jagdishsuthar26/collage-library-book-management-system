<?php
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'BRM_DB');
  $q="insert into book (title,price,author) value('$title',$price,'$author')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>insertion</title>
</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
	<p><?php if($status==1)
			echo "insertion done";
		else
			echo "insertion failed";
		?>
	</p>
	<h3>do you want to insert more record<a href="insertForm.php">click here</a></h3><br/>
	<h3>Go back to home page<a href="Home.php">click here</a></h3>
</body>
</html>