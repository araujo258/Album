 <?php
	
	header('Content-Type: text/html; charset=utf-8');

    session_start();

    require_once 'connBD.php';


if(isset($_SESSION['tipoLogin'])){
	//normal
	$user = $_SESSION['idUser'];

}else {
	//Facebook
    $user = $_SESSION['idUtilizadorFacebook'];
}

    $sql = "select * from user where idUser='$user'";
    $query = $conn->query($sql);
    $res = $query->fetch_assoc();

    echo $res['nome'].",".$res['username'].",".$res['email'].",".$res['telemovel'].",".$res['tipoUser'].",".$res['foto'];


?>
