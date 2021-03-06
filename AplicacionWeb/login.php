<?php 
session_start();
require_once('clases_conexion/cls_seguridad.php');
$obj_seg = new Seguridad;
if($obj_seg->MET_checkAcceso(0))
{
	echo"<script>window.location = 'modulos/home/frm_home.php';</script>";
}		
?>
<!DOCTYPE html>
<html>

<head>
	<title>DrClick | Sistema de Gestión Médica </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/theme.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="css/compiled/sign-in.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection" />
    <link href="css/login.css" rel="stylesheet">
	
    <script type="text/javascript" src="ajax_login/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="ajax_login/validacion.js"></script>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- Sign In Option 1 -->
    <div id="sign_in1">
        <div class="container">
            <div class="row">
                <!-- start Login box -->
                <div class="container" id="login-block">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                            <h3 class="animated bounceInDown"> Ingresar a su Cuenta </h3>
                           <div class="login-box clearfix animated flipInY">
                                <div class="login-logo">
                                    <a href="#"><img src="img/login-logo.png" alt="DrClick" /></a>
                                </div> 
                                 <div id="mensaje"></div>
                                <hr />                               
                                <div class="login-form">
                                    <div class="alert alert-error hide">
                                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                                          <h4>Error!</h4>
                                           Ud. tiene un nuevo mensaje
                                    </div>                                    
                                         <input type="text" name="username" id="username" value="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Usuario" required/> 
                                         <input type="password" name="password" id="password" value="" placeholder="Contraseña" required/> 
                                         <input type="button" class="btn btn-red" onclick="validacion_login()" value="Ingresar">
               							<div class="login-links"> 
                                            <a href="reset.php">Olvidó su contraseña ?</a>
                                        </div>	
                                </div> 			        	
                           </div>
                        </div>
                    </div>
                </div>
                <!-- End Login box -->
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="col-sm-6 residence">
                    <ul>
                        <li>Colombia 4511 y la 21ava.</li>
                        <li>Guayaquil - Ecuador.</li>
                    </ul>
                </div>
                <div class="col-sm-5 touch">
                    <ul>
                        <li><strong>Cel.</strong> 0989120781 </li>
                        <li><strong>Web.</strong><a href="http://itecnogestec.com" target="_blank"> www.itecnogestec.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row credits">
                <div class="col-md-12">
                    <div class="row social">
                        <div class="span12">
                        	<a href="http://itecnogest-ec.com" target="_blank"><img alt="Image" src="img/logo_powered.png" style="margin-bottom: 15px;"></a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-md-12">
                            © 2016 Itecnogest S.A. Todos los derechos reservados.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>
    <!-- end footer -->

</body>

</html>