<!DOCTYPE html>

<html>
<head>
    
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Anomaly Sighting Forum</title>
    <meta name = "description" content = "A webpage to store user data in the reposirtory">
    <link href = "CSS/style.php" rel = "stylesheet" type = "text/css">
    
</head>
<body>

	<header class = "header-title">
		<h1>ANOMALY SIGHTING FORUM</h1>
	</header>
	
	<main>

	<h2>LOG IN</h2>

	<form action = "Pages/Third_Page.php" method = "post">
		

		<b>Username:</b><br>
		<input type = "text" name = "username" style = "width : 95%;"><br>

		<b>Password:</b><br>
		<input type = "text" name = "password" style = "width : 95%;">

		<br>
		<br>

		<button name = "btn-submit" type = "submit" value = "Pages/Third_Page.php">Log In</button>
		<a href = "Pages/Second_Page.php" class = "form_reg">Create Account</a>
		
	</form>
		
	</main>
</body>
</html>
