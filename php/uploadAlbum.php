<?php
	echo '<pre>';
	print_r($_FILES);
	print "</pre>";

	$uploaddir = '../fotos/';
	$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
	$auxName = explode('.',basename($_FILES['fileToUpload']['name']));

	echo $_FILES['fileToUpload']['error'];

	session_start();
	$iduser = $_SESSION['idUser'];
	require_once 'connBD.php';


	$newName = $auxName[0]."_".floor(microtime(true)).".".$auxName[1];
	echo "<->".$newName;
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploaddir.$newName)) {
	    echo "Arquivo válido e enviado com sucesso.\n";
	} else {
	    echo "Erro de upload!\n";
	}
	$idAlbum = $_POST['Album'];
	echo 'Aqui está mais informações de debug:--->'.$idAlbum;

	$sql = "SELECT idUser FROM album WHERE idAlbum='".$idAlbum."'";

	$query = $conn->query($sql);
	$row = $query->fetch_assoc();

	$sql1 = "INSERT INTO fotos(nome, descricao, idAlbum, foto, estado) values('foto', 'descricao', ".$idAlbum.", '".$newName."', 0)";
echo $sql1;
	$query1 = $conn->query($sql1);
?>
