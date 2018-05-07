<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Gestión de la Información Externa</title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
   <div id="wrapper">
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-center" href="index.php"> GESIEX - Gestión de la Información Externa</a>
         </div>
         
         <ul class="nav navbar-nav navbar-center">
            <li class="hidden">
               <a href="#page-top"></a>
            </li>    
            <li>
               <a class="page-scroll" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="">
               <a href="index.php" class="page-scroll" >Noticias ADUANA </a>          
            </li>
            <li class="">
               <a href="index2.php" class="page-scroll">Noticias SUNAT</a>      
            </li>
         </ul>   
         
         <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
               </a>
               
               <ul class="dropdown-menu dropdown-user">
                   <li><a href="#"><i class="fa fa-user fa-fw"></i>admin</a>
                  </li>   
                  <li><a href="../../login.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                  </li>
               </ul>
            </li>
         </ul>

         <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
               <ul class="nav" id="side-menu">
                  <li class="sidebar-search">
                     <div class="input-group custom-search-form">
                        <img  class="img-responsive text-center" src="img/logoblanco.png" width="110" height="100" alt="">
                        <h5>Intendencia de Aduana de Tacna</h5>
                     </div>
                  </li>
                  <li>
                     <a class="navbar-default" href="ingresar.php"><i class="fa fa-edit fa-fw"></i> Ingresar Noticia</a>
                  </li>
                  <li>
                     <a class="navbar-default"  href="noticias.php"><i class="fa fa-folder-open-o fa-fw"></i> Noticias <span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                        <li>
                           <a class="navbar-default" href="not_fecha.php">Por Fecha</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="not_del.php">Por Delito</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="not_lugar.php">Por Lugar</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="not_interventor.php">Por Interventor</a>
                        </li>
                     </ul> 
                  </li>
                  <li>
                     <a class="navbar-default" href="infractor.php"><i class="fa fa-users fa-fw"></i> Infractores <span class="fa arrow"></span></a>    
                     <ul class="nav nav-second-level">
                        <li>
                           <a class="navbar-default" href="inf_del.php">Por Delito</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="inf_lugar.php">Por Lugar</a>
                        </li>
                     </ul>
                  </li>
                  <!--<li>
                     <a class="navbar-default" href="programacion.php"><i class="fa fa-calendar fa-fw"></i> Programación Trimestral </a>       
                  </li> -->
                  <li>
                     <a class="navbar-default" href="diarios.php"><i class="fa fa-newspaper-o fa-fw"></i> Diarios de interés <span class="fa arrow"></span></a>    
                     <ul class="nav nav-second-level">
                        <li>
                           <a class="navbar-default" href="https://diariocorreo.pe/edicion/tacna/?ref=menu_edi" target="blank">Correo</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="http://www.diariosinfronteras.pe/category/diariosf/tacna/" target="blank">Sin Fronteras</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="http://www.estrellaarica.cl" target="blank">La Estrella de Arica</a>
                        </li>
                        <li>
                           <a class="navbar-default" href="http://elperuano.pe/" target="blank">El Peruano</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="page-header text-center">Noticias de Interés Aduanero</h1>
               </div>
            </div>
            <div class="text-vertical-center">
               <div align="center">
                   <h3 class="section-subheading text-muted"> </h3>        
               </div>
            </div>
         </div>
         <section>
           <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cubes fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                         include_once("conexion.php"); 
                                        error_reporting(E_ALL ^ E_NOTICE);
                                        $c=array();
                                        $query = "call count_merca()";
                                        $result = $conexion->query($query);
                                        while($row = mysqli_fetch_row($result))
                                        {
                                            $c[] = $row;
                                        }

                                        mysqli_free_result($result);
                                        $conexion->next_result();
                                        
                                        for ($i=0;$i<count($c);$i++)
                                        {
                                            echo 
                                            "
                                              <div class='huge'>".($c[$i][0])."</div>
                                            ";
                                            
                                        }
                                        ?>
                                        <div>Mercaderías incautadas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver más</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php                                     
                                        $b=array();
                                        $query = "call count_noticias()";
                                        $result = $conexion->query($query);
                                        while($row = mysqli_fetch_row($result))
                                        {
                                            $b[] = $row;
                                        }
                                        mysqli_free_result($result);
                                        $conexion->next_result();
                                        
                                        for ($i=0;$i<count($b);$i++)
                                        {
                                            echo 
                                            "
                                              <div class='huge'>".($b[$i][0])."</div>
                                            ";
                                        }
                                        ?>
                                        <div>Intervenciones</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver más</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php                                     
                                        $a=array();
                                        $query = "call count_infractores()";
                                        $result = $conexion->query($query);
                                        while($row = mysqli_fetch_row($result))
                                        {
                                            $a[] = $row;
                                        }
                                        mysqli_free_result($result);
                                        $conexion->next_result();
                                        
                                        for ($i=0;$i<count($a);$i++)
                                        {
                                            echo 
                                            "
                                              <div class='huge'>".($a[$i][0])."</div>
                                            ";
                                        }
                                      
                                        ?>
                                        <div>Intervenidos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver más</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Últimas noticias</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                   <?php                                     
                                        $noticias=array();
                                        $query = "call MostrarTituloNot()";
                                        $result = $conexion->query($query);
                                        while($row = mysqli_fetch_row($result))
                                        {
                                            $noticias[] = $row;
                                        }
                                        mysqli_free_result($result);
                                        $conexion->next_result();
                                        
                                        for ($i=0;$i<count($noticias);$i++)
                                        {
                                            
                                            echo "
                                              <a href='#' class='list-group-item'>
                                              <span class='badge'>".($noticias[$i][1])."</span>
                                              <i class='fa fa-fw fa-check'></i>" .($noticias[$i][0])."
                                              </a>

                                            ";
                                        }
                                        
                                        ?>
                                </div>
                                <div class="text-right">
                              
                                    <a class="btn btn-info" href="#" role="button"> Ver más noticias <i class="fa fa-arrow-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Últimas mercancías incautadas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Cantidad</th>
                                                <th>Unidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php                                     
                                            $merca=array();
                                            $query = "call MostrarUltimaMerca()";
                                            $result = $conexion->query($query);
                                            while($row = mysqli_fetch_row($result))
                                            {
                                                $merca[] = $row;
                                            }
                                            mysqli_free_result($result);
                                            $conexion->next_result();
                                            
                                            for ($i=0;$i<count($merca);$i++)
                                            {
                                                
                                                echo "
                                                  <tr>
                                                  <td>".($merca[$i][0])."</td>
                                                  <td>".($merca[$i][1])."</td>
                                                  <td>".($merca[$i][2])."</td>
                                                  </tr>
                                                ";
                                        }
                                        $conexion->close();
                                        ?>                                                                                  
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                   <a class="btn btn-info" href="#" role="button"> Ver más noticias <i class="fa fa-arrow-circle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
         </section>
         
      </div>
     
   </div>
<!--<footer class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                  <center>
                    <span class="copyright">Copyright &copy; Intendencia de Aduana de Tacna 2017</span> <br>
                     <span> Parque Industrial  Mz.A Lt. 5-6 Pocollay - Tacna  <br>  Tel: 052-583120 </span>
                  </center>
                   
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer> -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
