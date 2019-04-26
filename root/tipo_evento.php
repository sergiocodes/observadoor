<?php
	session_start();
	include 'php/conexion.php';
	if(isset($_SESSION['user'])){
        if($_SESSION['nivel']==1){
            echo "";
        }else{
            session_destroy();
            echo '<script> window.location="login.php"; </script>';
        }        
    }else{
        echo '<script> window.location="login.php"; </script>';
    }
	$profile = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>ObservaDoor - Administrador - Inicio </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- Jquery JS-->
    
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="js/funciones.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
						<li>
                            <a href="operador.html">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
						<li>
                            <a href="administrador.php">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-table"></i>Tablas básicas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active">
                                    <a href="tipo_evento.php">TipoEvento</a>
                                </li>
                                <li>
                                    <a href="index2.html">TipoGrupo</a>
                                </li>
                                <li>
                                    <a href="index3.html">TipoUsuario</a>
                                </li>
                                <li>
                                        <a href="index3.html">TipoVisitante</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="eventos.php">
                                <i class="fas fa-home"></i>Eventos</a>
                        </li>
						<li>
                            <a href="cuentas_usuario.php">
                                <i class="fas fa-home"></i>Cuentas usuario</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">                          
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $profile ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="php/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    <!-- END HEADER DESKTOP-->
    <!-- MAIN CONTENT-->
    <div class="main-content">
            <div id="tabla_tipo_evento"></div>
    </div>

    <!-- Cuadro para  nuevos -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cancelar</h4>
            </div>
            <div class="modal-body">
                    <label>ID</label>
                    <input type="text" name="" id="input_id" class="form-control input-sm">
                    <label>Tipo de evento</label>
                    <input type="text" name="" id="input_nomevento" class="form-control input-sm">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                Agregar
                </button>
                
            </div>
            </div>
        </div>
    </div>
    <!-- FIN Cuadro para  nuevos -->

    <!-- Cuadro para modificar -->

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <input type="text" hidden="" id="idviejo" name="">
                        <label>ID</label>
                        <input type="text" name="" id="idnueva" class="form-control input-sm">
                        <label>Tipo de evento</label>
                        <input type="text" name="" id="descevento" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>                
                </div>
            </div>
        </div>
    </div>
    <!-- FIN Cuadro para modificar -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla_tipo_evento').load('componentes/tabla_tipo_evento.php');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#guardarnuevo').click(function(){
            id=$('#input_id').val();
            evento=$('#input_nomevento').val();
                agregardatos(id,evento);
            });

            $('#actualizadatos').click(function(){
            actualizaDatos();
            });

        });
    </script>

    
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
