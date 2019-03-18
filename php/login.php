<?php
header('Content-Type: text/html; charset=utf-8');

require_once 'connBD.php';

session_start();


$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$sql = "select * from user where username = '".$username."' and pw = '".$password."'";
$query = $conn->query($sql);
$res = $query->fetch_assoc();

if($query->num_rows == 1){

  $_SESSION['idUser'] = $res['idUser'];
  $_SESSION['nomeUser'] = $res['nome'];
  $_SESSION['username'] = $res['username'];
  $_SESSION['emailUser'] = $res['email'];
  $_SESSION['telemovel'] = $res['telemovel'];
  $_SESSION['password'] = $res['pw'];
  $_SESSION['tipoLogin'] = $user;

}else{

}
echo $query->num_rows;
 ?>
