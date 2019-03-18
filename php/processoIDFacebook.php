<?php
	session_start(); 
	$idUtilizadorFacebook = $_GET['idUtilizadorFacebook'];
	$_SESSION['idUtilizadorFacebook'] = $idUtilizadorFacebook;
	
	header('location: ../perfil.php');
?> 