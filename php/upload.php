<?php
	session_start();
	$iduser = $_SESSION['idUser'];
	require_once 'connBD.php';

	echo '<pre>';
	print_r($_FILES);
	print "</pre>";

	$uploaddir = '../imagem/';
	$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
	$auxName = explode('.',basename($_FILES['fileToUpload']['name']));

	echo $_FILES['fileToUpload']['error'];

	$newName = $auxName[0]."_".floor(microtime(true)).".".$auxName[1];
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploaddir.$newName)) {
	    echo "Arquivo válido e enviado com sucesso.\n";
	} else {
	    echo "Possível ataque de upload de arquivo!\n";
	}
 
	echo 'Aqui está mais informações de debug:';

	//$sql = "INSERT INTO `is`.`user` (`foto`) VALUES ('".$newName."','".$idCliente."')";
	$sql = "UPDATE user SET foto='".$newName."' WHERE idUser=".$iduser."";
echo $sql;
	$query = $conn->query($sql);
	echo $sql;
?>
