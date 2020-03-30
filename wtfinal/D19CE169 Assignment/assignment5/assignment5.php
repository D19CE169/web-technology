<?php
$link = mysqli_connect('localhost',"root","",'bakery_shop');
if(isset($_POST['submitBtn']))
{

		$name = $_POST['fName'];
		$email = $_POST['emailId'];
		$phone = $_POST['mNumber'];
		$city = $_POST['city1'];
		$Desig = $_POST['Designation1'];
		$workshop = $_POST['workshop'];
		
		$sql = "Insert into user_master(name,email,phoneno,city_id,Designation,workshop) values('$name','$email','$phone','$city','Desig','workshop')";

		$res=mysqli_query($link,$sql);} ?>

<!DOCTYPE html>
<html>


<meta name="viewpoint" content="width=device-width, initial scale=1.0">
<head>
	<title>Assignment 5</title>
	<link rel="stylesheet" type="text/css" href="Assignment_5_Styles.css">
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ4ArIw6jTkaX5aWC9zKFU3mysNxCa98c0yjQOwX5YP9WzdJihy">
	<div class="first">
	<h1  align="center"><font face="Comic Sans MS">National Workshop on Web Technology</font></h1>
	</div>
	<form id="frmEntry" name="frmEntry" class="form-horizontal"  action="assignment5.php" method="post">
	<div class="main">
<fieldset>
	<legend>
		Personal Information
	</legend>
	<table>
		
	Name :<input type="text" name="fName" placeholder="First Name" id="fName">

	
	
		<br> <br>
	Contact  : <input type="text" name="mNumber" placeholder="Mobile Number" id="mNumber">
	
		
		<br> <t> <br>
	Email :	<input type="email" name="emailId" placeholder="Email Address" id="emailId" >
<br>
<br>
	City : <select id="city1">
			<option > City</option>
			<option value="changa"> changa </option>
			<option value="nadiad"> nadiad </option>
			<option value="anand"> anand </option>
			<option value="vadodara"> vadodara </option>
			
		</select>

			  <br>
			  <br>
		

</fieldset>
</div>
<fieldset>
	<legend>
		Workshop Details
	</legend>
	<div class="main2">
		Designation : <select id="Designation1">
			<option >Designation</option>
			<option value="Student"> Student </option>
			<option value="Faculty"> Faculty </option>
			<option value="Professional"> Professional </option>
			<option value="Company"> Company Representative </option>
			
		</select>
		<br>
		<br>
		Select workshop<br>
		<input type="checkbox" name="workshop" id="Workshop" value="HTML4/5"> HTML 4/5

		<input type="checkbox" name="workshop" id="workshop" value="css"> CSS 

		<input type="checkbox" name="workshop" id="workshop" value="php"> PHP

		<input type="checkbox" name="workshop" id="workshop" value="Angular"> Angular
		<br>

		<input type="checkbox" name="workshop" id="workshop" value="Java Script"> Java Script

		<input type="checkbox" name="workshop" id="workshop" value="Jquery"> Jquery

		
		<br>
		<br>
		<br>
		Note : Workshop fees is Rs.500 per person 
		<br>
		<br>

		<input type="submit" name="submitBtn" id="submitBtn">

</fieldset>
	</div>
		
</form>

</body>
</html>