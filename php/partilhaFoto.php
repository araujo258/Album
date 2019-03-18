<?php
    require_once 'connBD.php';
    session_start();
    $aux = $_POST['tipo'];
    $idFoto = $_POST['idFoto'];
    if ($aux=="true") {
      $sql="DELETE FROM fotos WHERE idFoto=".$idFoto."";
      
      $query = $conn->query($sql);
      if ($query) {
        echo json_encode(1);
      }else{
        echo json_encode(0);
      }
    } else {
      $sql="SELECT estado FROM fotos WHERE idFoto=".$idFoto."";
      $query = $conn->query($sql);
      $res = $query->fetch_assoc();
      if ($res['estado']==1) {
        echo json_encode(0);
      } else {
        $sql = "UPDATE fotos SET estado=1 WHERE idFoto=".$idFoto."";
      	$query = $conn->query($sql);
        echo json_encode(1);
      }
    }





?>
