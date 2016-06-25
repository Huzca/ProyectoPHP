
<!DOCTYPE "HTML 4.01 Transitional EN" "http://www.w3.org/">
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
	<!--<![endif]-->
	<!-- start: HEAD --><head>
<!-- InstanceBeginEditable name="EditRegionPHP" --> 
<?php
session_start();

require_once('../../clases_conexion/cls_seguridad.php');
$obj_seg = new Seguridad;

if(!$obj_seg->MET_checkAcceso(0))
{
	echo"<script>window.location = '../../login.php';</script>";
	exit();
}

$menu_home="";
$menu_mantenimientos="";
$menu_agendamiento="";
$menu_paciente="";
$menu_doctor="class='active open'";
$menu_reportes="";
$menu_seguridad="";

?>
<!-- InstanceEndEditable -->


<title>DrClick || Software de Gestión Médico || Powered by Itecnogest</title>
<!-- start: META -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="" name="author" />
<!-- end: META -->
<!-- start: MAIN CSS -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../assets/fonts/style.css">
<link rel="stylesheet" href="../../assets/css/main.css">
<link rel="stylesheet" href="../../assets/css/main-responsive.css">
<link rel="stylesheet" href="../../assets/plugins/iCheck/skins/all.css">
<link rel="stylesheet" href="../../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
<link rel="stylesheet" href="../../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
<link rel="stylesheet" href="../../assets/css/theme_light.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="../../assets/css/print.css" type="text/css" media="print"/>
<!--[if IE 7]>
		<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- InstanceBeginEditable name="css" -->
<!-- InstanceEndEditable -->
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: FAVICON PAGE -->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!-- end: FAVICON PAGE -->
</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>

	<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
		  <div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
                        <img src="../../assets/images/logo_drclick.png" width="100" height="49">
                    <!-- end: LOGO -->
			  </div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#"> <img src="../../assets/images/drclick.jpg" class="circle-img" alt=""> <span class="username"><?php echo $_SESSION['avpusr_name']; ?></span> <i class="clip-chevron-down"></i> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="../../logout.php"> <i class="clip-exit"></i> &nbsp;Cerrar Sesión </a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
	</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li <?php echo $menu_home; ?> >
							<a href="../../modulos/home/frm_home.php"><i class="clip-home-3"></i>
								<span class="title"> Menú </span><span class="selected"></span>
							</a>
						</li>
                        <!-- INICIO MANTENIMIENTOS -->
                        <li <?php echo $menu_mantenimientos; ?>>
							<a href="../mantenimientos/frm_menu_mantenimientos.php"><i class="clip-wrench"></i>
								<span class="title">Mantenimientos</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN MANTENIMIENTOS -->
                        
                        <!-- INICIO AGENDAMIENTO -->
                        <li <?php echo $menu_agendamiento; ?>>
							<a href="../agendamiento/frm_menu_agendamiento.php"><i class="fa fa-calendar"></i>
								<span class="title">Agendamiento</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN AGENDAMIENTO -->
                        
                        <!-- INICIO PACIENTE -->
                        <li <?php echo $menu_paciente; ?>>
							<a href="../paciente/frm_menu_paciente.php"><i class="clip-user-5"></i>
								<span class="title">Paciente</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN PACIENTE -->

                        <!-- INICIO DOCTOR -->
                        <li <?php echo $menu_doctor; ?>>
							<a href="frm_menu_doctor.php"><i class="fa fa-user-md"></i>
								<span class="title">Doctor</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN DOCTOR -->

                        <!-- INICIO REPORTES -->
                        <li <?php echo $menu_reportes; ?>>
							<a href="../reportes/frm_menu_reportes.php"><i class="fa fa-clipboard"></i>
								<span class="title">Consultas y Reportes</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN REPORTES -->

                        <!-- INICIO SEGURIDAD -->
                        <li <?php echo $menu_seguridad; ?>>
							<a href="../seguridad/frm_menu_seguridad.php"><i class="clip-key"></i>
								<span class="title">Seguridad</span>
								<span class="selected"></span>
							</a>
						</li>
                        <!-- FIN SEGURIDAD -->
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>

            <!-- start: PAGE -->
			<div class="main-content">
            	<div class="container">
				<!-- InstanceBeginEditable name="contenido" -->
                <!-- start: PAGE HEADER -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: PAGE TITLE & BREADCRUMB -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-user-md"></i>
                                <a href="#"> Doctor </a>
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1> Doctor </h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <div class="menu_content">                        		
                      <div class="row">
                          <div class="col-md-12">
                                            <a href="../../modulos/doctor/paginas/frm_mant_medico.php">
                                            	<div class="icono">
               <img src="../../img/icono_menu/doctor/doctor.png" width="128" height="128"/>
                                                    <div class="label_icono">DOCTOR</div>
                                                </div>
                                           </a>
                                           <a href="../../modulos/doctor/paginas/frm_consulta_pacientes.php">
                                                <div class="icono">
               <img src="../../img/icono_menu/doctor/consulta.png" width="128" height="128"/>
                                                	<div class="label_icono">CREAR CONSULTA</div>
                                                </div>
                                          </a>
                                          <a href="../../modulos/doctor/paginas/frm_consulta_hist_pacientes.php">
                                                <div class="icono">
               <img src="../../img/icono_menu/doctor/hist_cli_ocupacional.png" width="128" height="128"/>
                                                	<div class="label_icono">FICHA OCUPACIONAL</div>
                                                </div>
                                          </a>
                                          <a href="../../modulos/agendamiento/paginas/frm_calendario_medicos.php">
                                                <div class="icono">
               <img src="../../img/icono_menu/agendamiento/generar_calendario.png" width="128" height="128"/>
                                                	<div class="label_icono">GENERAR CALENDARIO</div>
                                                </div>
                                          </a>
                                        
                          </div>
                      </div>
                 </div>
				<!-- InstanceEndEditable -->
                </div>
          </div>
            <!-- end: PAGE -->
</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2016 &copy; DrClick Todos los derechos reservados.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
        <!-- start: MAIN JAVASCRIPTS -->
	<!--[if lt IE 9]>
		<script src="../assets/plugins/respond.min.js"></script>
		<script src="../assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="../../assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
	<script src="../../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
	<script src="../../assets/plugins/blockUI/jquery.blockUI.js"></script>
	<script src="../../assets/plugins/iCheck/jquery.icheck.min.js"></script>
	<script src="../../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
	<script src="../../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
	<script src="../../assets/plugins/less/less-1.5.0.min.js"></script>
	<script src="../../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="../../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="../../assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- InstanceBeginEditable name="javascript" -->
        	
		<!-- InstanceEndEditable -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- InstanceBeginEditable name="ready js" -->
	<script>
			jQuery(document).ready(function() {
				Main.init();				
			});
		</script>
        
	<!-- InstanceEndEditable -->
</body>
	<!-- end: BODY -->

<!-- InstanceEnd --></html>
          
