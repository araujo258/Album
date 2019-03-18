<?php
	
	session_start();
    $user = $_SESSION['username'];
    require_once 'connBD.php';	

	$sql = "SELECT * from album where username='".$username."'";
	$query = $connBD -> query($sql);

	$rows = array();
	
	while($res = $query->fetch_assoc()){
		$album = array();
		$album['idAlbum'] = $res['idAlbum'];
		$album['nomeAlbum'] = $res['nome'];
		$album['desc'] = $res['descricao'];

		array_push($rows, $album);		
	}
		
	echo json_encode($rows);

 ?>
