<?php
	session_start();
	include("connBD.php");

	$Password=$_POST["pass"];
	$Email=$_POST["email"];
	$Telemovel=$_POST["tele"];
	$idUser = $_SESSION['idUser'];  

	$altera="UPDATE user SET email = '$Email', pw ='$Password',telemovel ='$Telemovel' WHERE idUser='$idUser'";
	mysqli_query($conn, $altera);

	mysqli_close($conn);
    header ('Location: ../perfil.php');



?>
