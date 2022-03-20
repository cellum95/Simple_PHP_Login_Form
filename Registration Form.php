<html>

<head>
	<title> Registration Form</title>
	<meta http-equiv = "Content-Type" content="text/html; charset=UTF-8">
	
	<style>
		
		body {
			height : 100%;
			background-color: #FFB6C1;
			text-rendering: optimizeLegibility;
			fony-family: -apple-system, BlinkMacSystemFont, system-ui, "Segoe UI",
			Roboto, Oxygen, Ubuntu, "Helvetica Neue", sans-serif;
			
			max-width: 95%;
			margin: auto;
		}
	</style>
</head>

<body>

	<div class="RegForm">
		<h2> Registration Form</h2>
		<form action="" method="GET">
		
			First Name:<br>
			<input type="text" name="fname">
			
			<br> Middle Name:<br>
			<input type="text" name="mname">
			
			<br> Last Name:<br>
			<input type="text" name="lname">
			
			<br> Username:<br>
			<input type="text" name="Uname">
			
			<br> Password:<br>
			<input type="text" name="Pname">
			
			<br> Confirm Password:<br>
			<input type="text" name="CPname">
			
			<br> Birthday:<br>
			<input type="date" name="Bday">
			
			<br> Email:<br>
			<input type="text" name="email">
			
			<br> Contact Number:<br>
			<input type="text" name="CNum">
			
			<input type="hidden" name="form_submitted" value="1"/>
			<br> <br>
			<input type="submit" value="Submit">
		</form>
	</div>
	
	<?php
if (isset($_GET['form_submitted'])) {
if (isset($_GET['Pname']) == isset($_GET['CPname'])){
	$pass = $_GET ['Pname'];
	$tpass = $_GET ['CPname'];
	if ($pass != $tpass ) {
		echo "<p>password and confirm password are not the same</p>";
	}else{
		
		echo "<h2>Thank you". $_GET['fname'] . "</h2>";
		
		echo "<p>You have been registered<br>";
		echo "Name: " . $_GET['fname'] . " " . $_GET['mname'] . "" . $_GET['lname'];
		
		echo "<br>";
		echo "Username: " . $_GET['Uname'];
		echo "<br>";
		echo "Password: " . $_GET['Pname'];
		echo "<br>";
		echo "Birthday: " . $_GET['Bday'];
		echo "<br>";
		echo "Email: " . $_GET['email'];
		echo "<br>";
		echo "Contact Number: " . $_GET['CNum'];
		echo "</p>";
	}
}
}
?>

</body>
</html>
