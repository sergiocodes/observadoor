<?php
	session_start();
	include 'php/conexion.php';
	if(isset($_SESSION['user'])){
        if($_SESSION['nivel']==2){
            echo "";
        }else{
            session_destroy();
            echo '<script> window.location="login.php"; </script>';
        }        
    }else{
        echo '<script> window.location="login.php"; </script>';
    }
    $profile = $_SESSION['user']; 
    $conexion=conexion();
    
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
    <title>ObservaDoor - Operador - Reporte de visitas </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Jquery JS-->
    <script src="librerias/jquery-3.3.1.min.js"></script>

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
    <script src="librerias/jquery-ui.js"></script>  
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
 

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
                            <a href="operador.php">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Reservas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Crear</a>
                                </li>
                                <li>
                                    <a href="index2.html">Modificar</a>
                                </li>
                                <li>
                                    <a href="index3.html">Eliminar</a>
                                </li>
                                <li>
                                    <a href="index3.html">Validar</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Reportes</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active">
                                    <a href="ope_rep_vis.php">Visitas</a>
                                </li>
                                <li>
                                    <a href="index2.html">Mantenciones</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-ul"></i>Listados</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="ope_lis_eve.php">Eventos</a>
                                </li>
                                <li>
                                    <a href="index2.html">Visitas actuales</a>
                                </li>
								 <li>
                                    <a href="index.html">Estado reservas</a>
                                </li>
                            </ul>
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
<div class="main-content">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Reporte de visitas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-accounts"></i>
                                            </div>
                                            <div class="text">
                                                 <div id="visitas_hoy"></div>
                                                <span>visitas hoy</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-calendar"></i>
                                            </div>
                                            <div class="text">
                                                <div id="eventos_disponibles"></div>
                                                <span>Cantidad de eventos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <strong>Filtro por</strong> Fecha
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Fecha inicio</label>
                                    <input type="date" id="bd_desde" name="bd_desde" placeholder="yyyy-mm-dd" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2" class="px-1  form-control-label">Fecha termino</label>
                                    <input type="date" id="bd_hasta" name="bd_hasta" placeholder="yyyy-mm-dd" required="" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <input type="button" name="btn_submit" id="btn_submit" class="btn btn-primary btn-sm" value="Filtrar">                                                              
                                </div>                             
                               
                            </form>
                        </div>
                        
                    </div>   
        <center>
        <ul class="pagination" id="pagination"></ul>
        </center>          

        
         <div id="agrega-registros"></div>
</div>

   
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

   

</body>

</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#eventos_disponibles').load('componentes/cant_eventos_disp.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#visitas_hoy').load('componentes/cant_visitas_hoy.php');
    });
</script>


<script>
$(document).ready(pagination(1));
$(function(){
	$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../componentes/tabla_rep_visitas.php';
		console_log(desde);
		console_log(hasta);
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		console_log(desde);
		console_log(hasta);
		var url = '../componentes/tabla_rep_visitas.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
});
</script>


