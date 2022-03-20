<?php
	session_start();
?>

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

	<form action = "index.php" method = "POST">
		

		<b>Username:</b><br>
		<input type = "text" name = "u_name" style = "width : 95%;"><br>

		<b>Password:</b><br>
		<input type = "password" name = "p_word" style = "width : 95%;">

		<br>
		<br>

		<input type = "hidden" name = "login_submit" value = "1">
		<input type="submit" value="Login">
		<a href = "Pages/Second_Page.php" class = "form_reg">Create Account</a>
		
		<?php
			if(isset($_POST['login_submit'])) {
				if($_POST['u_name'] != $_POST['u_name'] && $_POST['p_word'] != $_POST['rp_word']) {
					echo "Username and/or password does not exist";
				}
				else {
					header('Location: Pages/Third_Page.php');
				}
			}
		?>

	</form>
		
	</main>
</body>
</html>
