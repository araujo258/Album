<?php
header('Content-Type: text/html; charset=utf-8');
	session_start();
	$iduser = $_SESSION['idUser'];
	$AlbumName = $_POST['albumName'];
	require_once 'connBD.php';

	

	$sql1 = "INSERT INTO album(nome, idUser) values(".$AlbumName.", ".$iduser.")";
	echo "$sql1";
	$query1 = $conn->query($sql1);
?>