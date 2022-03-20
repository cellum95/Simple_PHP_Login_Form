<!DOCTYPE html>

<html>
<head>
    
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Anomaly Sighting Forum</title>
    <meta name = "description" content = "A webpage to store user data in the reposirtory">
    <link href = "../CSS/style.php" rel = "stylesheet" type = "text/css">
    
</head>
<body>

	<header class = "header-title">
		<h1>ANOMALY SIGHTING FORUM</h1>
	</header>
	
	<main>

	<h2>REGISTRATION</h2>

	<form action = "../index.php" method = "post">
		

		<b>Last Name:</b><br>
		<input type = "text" name = "lname" style = "width : 95%;"><br>

		<b>First Name:</b><br>
		<input type = "text" name = "fname" style = "width : 95%;">

		<b>Middle Name:</b><br>
		<input type = "text" name = "mname" style = "width : 95%;">

		<b>E-mail:</b><br>
		<input type = "text" name = "email" style = "width : 95%;">

		<b>Username:</b><br>
		<input type = "text" name = "username" style = "width : 95%;">

		<b>Password:</b><br>
		<input type = "text" name = "password" style = "width : 95%;">

		<b>Re-enter Password:</b><br>
		<input type = "text" name = "password" style = "width : 95%;">

		<br>
		<br>

		<button name = "btn-submit" type = "submit" value = "../index.php">Register</button>
		
	</form>
		
	</main>
</body>
</html>
