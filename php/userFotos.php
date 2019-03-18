<?php
require_once 'connBD.php';
    session_start();
    $user = $_SESSION['idUser'];



    $sql = "SELECT f.foto, f.nome, f.descricao, f.idFoto, a.idAlbum, a.nome As Anome, a.descricao As Adescricao FROM fotos f
    JOIN album a ON f.idAlbum = a.idAlbum JOIN user u ON u.idUser = a.idUser
    where a.idUser=".$user."";


    $query = $conn->query($sql);
    $rows = array();

    $aux = array();

        while($row = $query->fetch_assoc()){
          $sqlaux = "SELECT * FROM `fotos` WHERE `idAlbum`= '".$row['idAlbum']."'";
          $queryaux = $conn->query($sqlaux);
          $rosult = $queryaux->num_rows;
          //$rosult= mysql_num_rows($queryaux);
          //$rosult = $queryaux->fetch_assoc();
          //echo $rosult;
          //var_dump($rosult);

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

 ?>
