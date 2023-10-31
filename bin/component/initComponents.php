<?php 

namespace component;

class initComponents{

  public static function componentsHead(){

     $componentsHead = '

     <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Sistema Web</title>
     <link href="content/css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="content/css/main.css">  
     <link rel="stylesheet"  type="text/css" href="plugins/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
     <link href="content/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Theme style -->
     <link rel="stylesheet" href="content/css/adminlte.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="content/css/overlayScrollbars/css/OverlayScrollbars.min.css">
     <link rel="stylesheet" href="plugins/datatables/datatables.min.css">
     <script src="content/js/all.min.js" crossorigin="anonymous"></script>

     </head>';

     echo $componentsHead;
 }

 public static function componentsJS(){

     $componentsJS = '

     <footer class="py-4 mt-auto">
     <div class="container-fluid">
     <div class="d-flex align-items-center justify-content-between small">
     <div class="text-muted">Copyright &copy; Your Website 2019</div>
     <div>
     <a href="#">Privacy Policy</a>
     &middot;
     <a href="#">Terms &amp; Conditions</a>
     </div>
     </div>
     </div>
     </footer>

     <script src="plugins/jquery/jquery.js" crossorigin="anonymous"></script>
     <script src="plugins/popper/popper.min.js"></script>
     <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
     <script src="plugins/datatables/datatables.min.js"></script>
     <script src="plugins/datatables/JSZip-2.5.0/jszip.min.js"></script>   
     <script src="plugins/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
     <script src="plugins/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
     <script src="plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     <script src="plugins/datatables/buttons.print.min.js"></script>
     <script src="plugins/datatables-buttons/js/buttons.colVis.js"></script>

     <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
     <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
     <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
     <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
     <script src="content/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script src="content/js/scripts.js"></script>

     <script src="content/js/sweetalert2.all.min.js"></script>

     <script src="content/js/adminlte.js"></script>

        ';
                echo $componentsJS;



            }
public static function nav(){

    $directory="content/usuarios/";
    $dirint = dir($directory);
    $bandera = false;
    while (($archivo = $dirint->read()) !== false && $bandera == false)
    {
        if($archivo == $_SESSION['usuario']['id'].".png"){
            $imagen = $archivo;
            $bandera = true;
        }
        else
         $imagen = "img5.png";
    }
    $dirint->close(); 
      $nav = '
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notificaciones:
                </h6>
                <center><span class="spinner-border"></span></center>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <div class="small text-gray-400">Diciembre 12, 2022</div>
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        </div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <div class="small text-gray-400">Diciembre 12, 2022</div>
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        </div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div class="small text-gray-400">Diciembre 12, 2022</div>
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        </div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="?pagina=Notificaciones">Todas las
                    notificaciones</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <spam class="">
                    '.$_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido'] .'
                </spam>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in p-0" aria-labelledby="userDropdown">
                <div class="card-header m-0 p-0 d-flex justify-content-center">
                    <div  style="top: 0;left: 0;width: 250px; height: 150px;background:#337ab7"></div>
                    <img class="imagen2"
                        style="position: absolute; top: 95px; width: 120px; height: 105px; border-radius: 50%; border: 5px solid #fff; background-color: #fff;"
                        src="content/usuarios/'.$imagen.'">
                </div>
                <div class="d-flex justify-content-center" style="margin-top:40px; margin-bottom:0px">
                    <p class="m-0">
                        '. $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido'] .'
                    </p>
                </div>
                <hr class="m-1">
                <div class="m-0 d-flex justify-content-between">
                    <div>
                        <a class="btn btn-primary m-2" href="?pagina=Perfil" style="font-size:13px">Perfil</a>
                    </div>
                    <a href="?pagina=Login" class="btn btn-danger m-2" style="font-size:13px">Salir</a>
                </div>
            </div>
        </li>
    </ul>
</nav>';
      echo $nav;
    }
        }



        ?>