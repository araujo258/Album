<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
    <script src="js/perfil.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="perfilFunction()">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"; style="padding-left: 20px;">Galeria de Photos </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                <a href="php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">
                    <br><br>
                    <li>
                        <a href="feed.html"><i class="fa fa-fw fa-eye"></i> Feed Galeria</a>
                    </li>
                      </li>
                    <li class="active">
                        <a href="perfil.php"><i class="fa fa-fw fa-user  "></i> Perfil</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-camera  "></i> Fotos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li >
                                <a href="userFotos.php">Suas fotos</a>
                            </li>
                            <li>
                                <a href="listarFotos.html">Listas Fotos</a>
                            </li>
                            <li>
                                <a href="fotosPartilhadas.html">Partilhadas</a>
                            </li>
                        </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <p id="nomeComp"></p>
                            <small id="email"></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-user"></i>  <a href="perfil.html">Perfil</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div>
                    <div class="divLeft">
                      <div>
                        <img id="imagemPerfil" class="img-rounded" src="imagem/default_1234567.jpg" style='max-width:800px; max-height:600px;'>
                      </div>
                      <div>
                        <form action="#" id="form"><br>
                          <input type="file" name="fileToUpload" id="fileToUpload"><br>
                          <button class="btn btn-default" id="imgChange">Alterar</button>
                        </form>
                      </div>
                    </div>
                    <div class="divRight">
                      <div>
                        <h3 id="nomePerfil"></h3>
                        <h3 id="user"></h3>
                        <h3 id="email"></h3>
                        <h3 id="tele"></h3>
                      </div>

                     <button class="btn btn-default" onclick="window.location.href='altera_dados.php'"> Editar </button>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
