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
    <link href = "../CSS/style.php" rel = "stylesheet" type = "text/css">
    
</head>
<body>

	<header class = "header-title">
		<h1>ANOMALY SIGHTING FORUM</h1>
	</header>
	
	<main>

	<h2>REGISTRATION</h2>

	<form action = "Second_Page.php" method = "POST">
		

		<b>Last Name:</b><br>
		<input type = "text" name = "l_name" style = "width : 95%;">

		<b>First Name:</b><br>
		<input type = "text" name = "f_name" style = "width : 95%;">

		<b>Middle Name:</b><br>
		<input type = "text" name = "m_name" style = "width : 95%;">

		<b>E-mail:</b><br>
		<input type = "text" name = "e_m" style = "width : 95%;">
		

		<b>Username:</b><br>
		<input type = "text" name = "u_name" style = "width : 95%;">


		<b>Password:</b><br>
		<input type = "password" name = "p_word" style = "width : 95%;">

		<b>Re-enter Password:</b><br>
		<input type = "password" name = "rp_word" style = "width : 95%;">

		<br>
		<br>

		<input type = "hidden" name = "register_submit" value = "1">
		<input type="submit" value="Register">

		<?php
			if(isset($_POST['register_submit'])) {
				$_POST['l_name'];
				$_POST['f_name'];
				$_POST['m_name'];
				$_POST['e_m'];
				$_POST['u_name'];
				$_POST['p_word'];
				$_POST['rp_word'];


				if($_POST['rp_word'] != $_POST['p_word']) {
					echo "Password does not match";
				}
				else {
					header('Location: ../index.php');
				}
			}
		?>

	</form>


		
	</main>
</body>
</html>
