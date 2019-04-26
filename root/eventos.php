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
    
    require_once "php/conexion.php";
    $conexion=conexion();
    
    $sql="SELECT * from tipo_evento";
    $result=mysqli_query($conexion,$sql);
    $sql2="SELECT * from sector";
    $result2=mysqli_query($conexion,$sql2);
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
    <title>ObservaDoor - Administrador - Eventos </title>

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
                                    <li>
                                        <a href="tipo_evento.php">TipoEvento</a>
                                    </li>
                                    <li>
                                        <a href="tipo_grupo.php">TipoGrupo</a>
                                    </li>
                                    <li>
                                        <a href="tipo_usuario.php">TipoUsuario</a>
                                    </li>
                                    <li>
                                        <a href="tipo_visitante.php">TipoVisitante</a>
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
            <div id="tabla_eventos_adm"></div>
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
                    <label>Nombre evento</label>
                    <input type="text" name="" id="i_nomevento" class="form-control input-sm">
                    <label>Tipo de evento</label>
                    <div class="row form-group">
                        <div class="col-12 col-md-9">
                            <select name="" id="i_tipevento" class="form-control-sm form-control">
                                <?php while($row=mysqli_fetch_array($result)):;?>
                                <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>                            
                                <?php endwhile;?>
                            </select>
                        </div>
                    </div>
                    <label>Sector</label>
                    <div class="row form-group">
                        <div class="col-12 col-md-9">
                            <select name="" id="i_sector" class="form-control-sm form-control">
                                <?php while($row=mysqli_fetch_array($result2)):;?>
                                <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>                            
                                <?php endwhile;?>
                            </select>
                        </div>
                    </div>
                    <label>Hora inicio</label>
                    <input type="text" name="" id="i_horainicio" class="form-control input-sm">
                    <label>Hora fin</label>
                    <input type="text" name="" id="i_horafin" class="form-control input-sm">
                    <label>Fecha</label>
                    <input type="text" name="" id="i_fecha" class="form-control input-sm">
                    <label>Creador</label>
                    <input type="text" name="" id="i_creador" class="form-control input-sm">
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
                    <input type="text" hidden="" id="i2_idevento" name="">
                    <label>Nombre evento</label>
                    <input type="text" name="" id="i2_nomevento" class="form-control input-sm">
                    <label>Tipo de evento</label>
                    <input type="text" name="" id="i2_tipevento" class="form-control input-sm">
                    <label>Sector</label>
                    <input type="text" name="" id="i2_sector" class="form-control input-sm">
                    <label>Hora inicio</label>
                    <input type="text" name="" id="i2_horainicio" class="form-control input-sm">
                    <label>Hora fin</label>
                    <input type="text" name="" id="i2_horafin" class="form-control input-sm">
                    <label>Fecha</label>
                    <input type="text" name="" id="i2_fecha" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="actualizadatosevento" data-dismiss="modal">Actualizar</button>                
                </div>
            </div>
        </div>
    </div>
    <!-- FIN Cuadro para modificar -->    

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla_eventos_adm').load('componentes/tabla_eventos_adm.php');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#guardarnuevo').click(function(){
            nom_evento=$('#i_nomevento').val();
            tip_evento=$('#i_tipevento').val();
            sec_evento=$('#i_sector').val();
            hora_ini=$('#i_horainicio').val();
            hora_fin=$('#i_horafin').val();
            fecha=$('#i_fecha').val(); 
            creador=$('#i_creador').val(); 
            agregardatosevento(nom_evento,tip_evento,sec_evento,hora_ini,hora_fin,fecha, creador);
            });

            $('#actualizadatosevento').click(function(){
            actualizaDatosEvento();
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
