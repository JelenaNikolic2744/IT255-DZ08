<?php
	
	require_once('povezivanjeBaza.php');
	
	$ime=$_POST['username'];
	$password=$_POST['password'];
	$proveri=$conn->prepare('SELECT count(*) as BROJ, id FROM korisnik WHERE username=:username AND password=:password');
	$proveri->bindParam(':username', $ime);
	$proveri->bindParam(':password', $password);
	$proveri->execute();
	$row = $proveri->fetch();
	if ($row['BROJ']==1){
		
		session_start();
		$_SESSION['user'] = $row['id'];
		header('location: Pocetna.html');
	}
	else{
		header('location: login.php');
	}
	
?>