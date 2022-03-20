<?php
	header('Content-type: text/css; charset: UTF-8');
?>

:root {
	font-size: 16px;
	font-family: 'Consolas';
	--text-primary: #ffc20e;
	-text-secondary: #FFFFFF;
	--bg-primary: #009900;
	--bg-secondary: #818181;
	--bg-tertiary: #FFFFFF;
}

body {
	color: black;
	background-color: white;
	margin: 0;
	padding: 0;
}

.header-title {
	background-color: var(--bg-secondary);
	position: relative;
}

.header-title h1 {
	margin: 0;
	left: 3rem;
	padding: 1rem;
	color: var(--text-secondary);
	text-align: center;
}

form {
	margin: 0 auto;
	padding: 5px;
	width: 250px;
	border: 3px solid black;
}

h2, h4 {
	margin-top: 3rem;
	text-align: center;
}

button {
	color: black;
	font-size: 18px;
	border-radius: 12px;
	margin: auto;
	display: block;
}

input {
	margin: auto;
	text-align: center;
	display: block;
}

a {
	margin: auto;
	text-align: center;
	display: block;
}

.profile-div {
	display: flex;
	border: 1px solid black;
	padding: 1rem;
	background-color: var(--bg-secondary);
	width: 50%;
	margin: auto;
}

.profile-div-one {
	flex: 1;
	margin: auto;
	background-color: var(--bg-tertiary);
}
