<?php
session_start();
if(isset($_GET['log'])){
	session_destroy();
	session_commit();
	header("location: login.php");
	exit(0);
}

if(isset($_SESSION['user'])){
	header('Location: Pocetna.html');
	exit(0);
}
?>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="less.css">
</head>
	<body>
	<div id="login">
	<fieldset>
	<legend>Uloguj se</legend>
		<form action="loginCheck.php" method="POST" id="loginForma">
			<input type="text" name="username"\><br><br>
			<input type="password" name="password"\><br><br>
			<input type="submit" value="posalji">
		</form>
         <a href="registracijaForma.php">Registrujte se</a>
		</fieldset>
		</div>
	</body>
</html>