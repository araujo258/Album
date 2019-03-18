<?php

    session_start();

    include_once("./php/connBD.php");

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

</head>

<body onload="perfilFunction()"">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"; style="padding-left: 20px;" ">Galeria de Photos </a>
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
                        <a href="#"><i class="fa fa-fw fa-eye"></i> Feed Galeria</a>
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
                                <a href="#">Publicas</a>
                            </li>
                            <li>
                                <a href="#">Partilhadas</a>
                            </li>
                        </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" style="height: 1010px;">

        <form role="form" action='php/editar_perfil.php' method="POST">
            <div class="box-body">
                <br>
        <table style="width:70%" align="center">
        <tr>
            <td colspan="3" >
              <div class="form-group">
                <label>Nome: </label>
                <input type="text" id="Nome" class="form-control" value="<?php echo $_SESSION['nomeUser']; ?>" disabled="true">
              </div>
            </td>
        </tr>
        <tr>
          <td colspan="3">
                <div class="form-group">
                   <label>Username: </label>
                   <input type="text" class="form-control" id="Username" value="<?php echo $_SESSION['username']; ?>" disabled="true">
                </div>          
          </td>
          </tr>
        <tr>
          <td>
                <div class="form-group">
                   <label>Password: </label>
                   <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $_SESSION['password']; ?>" required>
                </div>          
          </td>
          <td>
                <div class="form-group">
                   <label>Repetir password: </label>
                   <input type="password" class="form-control" id="pass1" value="<?php echo $_SESSION['password']; ?>" required>
                </div>          
          </td>
          </tr>
          <tr>
          <td>
                <div class="form-group">
                   <label>Email: </label>
                   <input type="text" class="form-control" name="email" id="Email" value="<?php echo $_SESSION['emailUser']; ?>" required>
                </div>          
          </td>
          <td>
                <div class="form-group">
                   <label>Telemóvel: </label>
                   <input type="text" class="form-control" name="tele" id="tele" value="<?php echo $_SESSION['telemovel']; ?>" required>
                </div>        
          </td>
          </tr>

          <td >
              <div class="box-footer">
              <br>  
                <button type="submit" class="btn btn-primary">Guardar Alteração</button>
              </div>
            <br>                       
          </td>
        </tr>
        </table>
      </form>

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
