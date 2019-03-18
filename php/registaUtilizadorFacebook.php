<?php
	session_start(); 
    //verifica se existe conexão com bd, caso não tenta criar uma nova
    require_once ('connBD.php');
     
    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
	$idUtilizadorFacebook = $_GET['idUtilizadorFacebook'];
	$_SESSION['idUtilizadorFacebook'] = $idUtilizadorFacebook;
    $nomeFacebook = $_GET['nomeFacebook'];
	$emailFacebook = $_GET['emailFacebook'];
	
	
	$string_sql = "INSERT INTO user (idUser, nome, email) VALUES ('".$idUtilizadorFacebook."','".$nomeFacebook."','".$emailFacebook."')"; //String com consulta SQL da inserção
     			
	mysqli_query($conn,$string_sql); //Realiza a consulta

	header('Location: ../perfil.php');

    mysqli_close($conn); //fecha conexão com banco de dados 

?> 