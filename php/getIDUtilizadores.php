<?php
	session_start(); 
    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "", "sir");	
	
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT idUser FROM user");    
								
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?> 