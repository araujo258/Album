<?php
require_once 'connBD.php';
    session_start();
    $verifica = $_POST['verifica'];
    if ($verifica=="false") {
      $idFoto = $_POST['idFoto'];
      $sql="SELECT estado FROM fotos WHERE idFoto=".$idFoto."";
      $query = $conn->query($sql);
      $res = $query->fetch_assoc();
      if ($res['estado']==0) {
        echo json_encode(0);
      } else {
        $sql = "UPDATE fotos SET estado=0 WHERE idFoto=".$idFoto."";
      	$query = $conn->query($sql);
        echo json_encode(1);
      }
    } else {
      if ($verifica=="trueAll") {

        $sql = "SELECT f.foto, f.nome, f.descricao, f.idFoto, a.idAlbum, a.nome As Anome, a.descricao As Adescricao FROM fotos f
        JOIN album a ON f.idAlbum = a.idAlbum JOIN user u ON u.idUser = a.idUser
        where f.estado=1";
      
      } else {
        $user = $_SESSION['idUser'];
        $sql = "SELECT f.foto, f.nome, f.descricao, f.idFoto, a.idAlbum, a.nome As Anome, a.descricao As Adescricao FROM fotos f
        JOIN album a ON f.idAlbum = a.idAlbum JOIN user u ON u.idUser = a.idUser
        where f.estado=1 and a.idUser=".$user."";
      }


      $query = $conn->query($sql);
      $rows = array();
      $aux = array();
          while($row = $query->fetch_assoc()){
            $sqlaux = "SELECT * FROM `fotos` WHERE `idAlbum`= '".$row['idAlbum']."'";
            $queryaux = $conn->query($sqlaux);
            $rosult = $queryaux->num_rows;
              $foto = array();
              $foto['idAlbum'] = $row['idAlbum'];
              $foto['Adescricao'] = $row['Adescricao'];
              $foto['Anome'] = $row['Anome'];
              $foto['idFoto'] = $row['idFoto'];
              $foto['foto'] = $row['foto'];
              $foto['nome'] = $row['nome'];
              $foto['descricao'] = $row['descricao'];
              $foto['tamanho'] = $rosult;
              array_push($rows, $foto);
          }
          echo json_encode($rows);
    }




 ?>
