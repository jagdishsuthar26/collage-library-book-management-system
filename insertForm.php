<!DOCTYPE html>
<html>
<head>
<title>insertion form</title>
<link rel="stylesheet" href="./css/formType.css"
</head>
<body>
<div id="header">
<h3>  CIT book record management</h3>
</div>
<div id="mainimg">
<img src="./images/mainimg.jpg" width="1300px" height="400px" / >
</div>
<div id="main">
<h1>please fill New Record : </h1>
<form action="insertion.php" method="post">
	<table>
		<tr>
			<th>Title</th>
			<td><input type="text" name="title" required ></td>
		</tr>
		<tr>
			<th>Price</th>
			<td><input type="text" name="price" required ></td>
		</tr>
		<tr>
			<th>Author</th>
			<td><input type="text" name="author" ></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Insert" ></td>
		</tr>
		
	</table>

</form>
</div>
<h1>PHOTO GALLERY </h1>
	<div id="slide">
	<img src="./images/jks1.jpg" width="150px" height="180px" >
	<img src="./images/jks2.jpg" width="150px" height="180px" >
	<img src="./images/jks3.jpg" width="150px" height="180px" >
	<img src="./images/jks4.jpg" width="150px" height="180px" >
	<img src="./images/jks5.jpg" width="150px" height="180px" >
	<img src="./images/jks6.jpg" width="150px" height="180px" >
	<img src="./images/jks7.jpg" width="150px" height="180px" ><br/>
	<img src="./images/jks8.jpg" width="150px" height="180px" >
	<img src="./images/jks9.jpg" width="150px" height="180px" >
	<img src="./images/jks10.jpg" width="150px" height="180px" >
	<img src="./images/jks11.jpg" width="150px" height="180px" >
	<img src="./images/jks12.jpg" width="150px" height="180px" >
	<img src="./images/jks13.jpg" width="150px" height="180px" >
	<img src="./images/jks14.jpg" width="150px" height="180px" >
	</div>
	<h1>VIDEO GALLERY </h1>
	<div id="slide">
	<video src="./videos/jks1.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks2.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks3.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks4.mp4" width="250px" height="200px" loop controls></video><br/>
	<video src="./videos/jks5.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks6.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks7.mp4" width="250px" height="200px" loop controls></video>
	<video src="./videos/jks8.mp4" width="250px" height="200px" loop controls></video>
	
	</div>
	<br/>
	<h3>Go back to home page<a href="Home.php">click here</a></h3>
<div id="footer">

<h1>footer</h1>
</div>
</body>
</html>
