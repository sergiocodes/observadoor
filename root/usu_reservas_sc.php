<?php 
    require_once "php/conexion.php";
    $conexion=conexion();
    
    $sql="SELECT * from tipo_visitante";
    $result=mysqli_query($conexion,$sql);
    $sql2="SELECT * from tipo_grupo";
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
    <title>ObservaDoor - Eventos y reservas </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Alertify CSS-->
    <link href="librerias/alertifyjs/css/alertify.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <!-- <div class="page-wrapper"> -->
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
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
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
		<!-- NORMAL -->
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
                            <a href="usuario.html">
                                <i class="fas fa-home"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="usu_listado.html">
                                <i class="fas fa-list-ul"></i>Listado eventos</a>
                        </li>
                        <li class="active">
                            <a href="usu_reservas.html">
                                <i class="fas fa-check-square"></i>Reserva</a>
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
								</div>
							</div>
						</div>
					</div>
				
				</header>
				<!-- END HEADER DESKTOP-->
		<!-- MAIN DESKTOP-->
		<div class="main-content">
			<div class="card">
				<div class="card-header">
					<strong>Crear reserva</strong> Visitas
				</div>

                <form action="crearreserva.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				    <div class="card-body card-block">

                            <div class="row form-group">                        
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">RUT</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="rut-input" name="rut-input" placeholder="RUT" class="form-control" required>
                                    <small class="form-text text-muted">Sin puntos ni digito verificador</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nombre</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nom-input" name="nom-input" placeholder="Nombre" class="form-control" required>
                                    <small class="form-text text-muted">Ejemplo: Juan</small>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Apellido Paterno</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="app-input" name="app-input" placeholder="Apellido" class="form-control" required>
                                    <small class="form-text text-muted">Ejemplo: Soto</small>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Apellido Materno</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="apm-input" name="apm-input" placeholder="Apellido" class="form-control" required>
                                    <small class="form-text text-muted">Ejemplo: Ramirez</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Teléfono</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="tel-input" name="tel-input"  class="form-control" required>
                                    <small class="form-text text-muted">Ejemplo: 123456789</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Tipo de reserva</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="select_tr" id="select_tr" class="form-control">
                                            <?php while($row=mysqli_fetch_array($result)):;?>
                                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Integrantes</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="int-input" name="int-input"  class="form-control" disabled>
                                    <small class="form-text text-muted">Ejemplo: 8</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Tipo de grupo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="select_tv" id="select_tv" class="form-control" disabled>
                                            <?php while($row=mysqli_fetch_array($result2)):;?>
                                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                                            <?php endwhile;?>
                                        </select>
                                        <small class="form-text text-muted">Seleccione la opción que más representa al grupo</small>
                                    </div>
                            </div>
						
						    <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">ID Evento</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="event-input" name="event-input" placeholder="1234" class="form-control" required>
                                    <small class="help-block form-text">Ingresa el ID del evento que deseas reservar</small>
                                    <small class="help-block form-text">Puedes revisar los eventos disponible <a href=usu_listado.html target="_blank">aquí</a></small>
							</div>
						</div>

					</form>
				</div>
				<!--  -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i>Siguiente
					</button>
					<button type="reset" class="btn btn-danger btn-sm">
						<i class="fa fa-ban"></i> Reset
					</button>
				</div>
				<!--  -->
			</div>
		</div>
	</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
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

    <script>
        $( function() {
        $("#select_tr").change( function() {
            if ($(this).val() === "2") {
                $("#int-input").prop("disabled", false);
                $("#select_tv").prop("disabled", false);
            } else {
                $("#int-input").prop("disabled", true);
                $("#select_tv").prop("disabled", true);
            }
            });
        });
    </script>

</body>

</html>
<!-- end document-->
