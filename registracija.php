<?php
		require_once('povezivanjeBaza.php');
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$stmt = $conn->prepare("INSERT INTO korisnik (username, password) VALUES (:username, :password)");
		
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		
		$stmt->execute();
		
        session_start();
        $_SESSION["username"] = $row["username"];
        header('Location: login.php');
		
		
?>