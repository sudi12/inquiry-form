
<html>
<head>
	<title> enquiry form design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contact-title">
		<h1 >WELCOME !!!</h1>
		<marquee><h2>we are always there for you!!!</h2></marquee>
	</div>
	<div class="enquiry-form">
		<form id="enquiry-form" method="POST" action="index.php">
			<input name="name" type="text" class="form-control" placeholder="your name" required><br>
			<input name="email" type="email" class="form-control" placeholder="your email" required><br>
			<textarea name="enquiry_message" class="form-control" placeholder="enquiry_message" row="4" required></textarea><br>
			<input type="submit" name="submit"  class="form-control submit" value="submit">

		</form>
	</div>
</body>
</html>
<?php


$connection= mysqli_connect('localhost','root','');
if(!$connection){
	die("database connection failed " . mysqli_error($connection));
}
$select_db= mysqli_select_db($connection,'cc');
if(!$select_db){
	die("database selection failed " . mysqli_error($connection));
	
}
if(isset($_POST['submit'])){
	$name= $_POST['name'];
	$email= $_POST['email'];
	$enquiry_message= $_POST['enquiry_message'];
	$query = "INSERT INTO contact(name,email,enquiry_message) VALUES ('$name','$email','$enquiry_message')";
	if(mysqli_query($connection,$query)){
		echo"<h3>students data inserted</h3>";

	}
}
	

?>