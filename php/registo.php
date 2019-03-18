<?php
header('Content-Type: text/html; charset=utf-8');

$nome = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$telem = $_POST['telem'];

require_once 'connBD.php';

$sql = "SELECT username from user where username='".$username."'";

$query = $conn->query($sql);
if ($query->num_rows == 1) {
  echo "2";
} else {
  $sql = "INSERT INTO `user`(`nome`, `username`, `email`, `pw`, `tipoUser`, `telemovel`) VALUES ('".$nome."', '".$username."', '".$email."', '".$password."', 0, ".$telem.")";
  $query = $conn->query($sql);
  if($query){
    echo "1";
  }else{
    echo "0";
  }
}
 ?>
