<?php
require_once 'connBD.php';
    session_start();

    $sql = "SELECT idUser, nome FROM user";

    $query = $conn->query($sql);
    $rows = array();
    while($row = $query->fetch_assoc()){
      $foto = array();
      $foto['idUser'] = $row['idUser'];
      $foto['nome'] = $row['nome'];
      array_push($rows, $foto);
    }
    echo json_encode($rows);
?>
