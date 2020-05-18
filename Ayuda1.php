<?php 
include_once("mantenimiento.php");
?>
<html>
	<head>
		<title>Equípame Zona Sur</title>
		<meta name="keyword" content="HTML5, CSS3, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

		<link rel="shortcut icon" href="rsc/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
    	<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>

	<body>
		<nav style="background-color: #000">
		    <div class="nav-wrapper">
		    <a href="#" class="brand-logo center" style="font-size: 15px;">Ayuda</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="login.php"><i class="mdi-action-perm-contact-cal left"></i>Admin</a></li>
				<li><a href="index.php"><i class="mdi-action-home left"></i>Principal</a></li>	
		      </ul>
		    </div>  
		</nav>
		<div class="container">
		<div class="row">
			<div class="col s12 m12 l90">
				<div class="container center-align" style="margin-top: 30px";>
          			<img class="responsive-img materialboxed" data-caption="CSS3 Image" src="rsc/maleta.png"/>
        		</div>
				<h5 style="font-weight: bold;color: #088A68;" class="center-align">Guía de ayuda</h5>
				<p style="font-weight: bold; text-align: justify;">Usar la app Equípame es muy fácil, si eres nuevo, estos pasos te ayudarán a utilizarla de forma óptima.</p>
			    <p style="font-weight: bold; color: #088A68;">
			      Paso 1.
			    </p>
			    <p>Seleccionar todas la opciones que se adapten a tu viaje.</p>

			    <p style="font-weight: bold; color: #088A68;">
			      Paso 2.
			    </p>
			    <p>Hacer clic en el botón "Descargar"</p>

			    <p style="font-weight: bold; text-align: justify;">
			      Y ¡Listo! Tu lista personalizada se descargará en tu dispositivo en un documento para que tengas acceso a ella en cuando quieras.
			    </p>
	    	</div>

	    	  
	    </div>
	    </div>
		
   		<script type="text/javascript">
			$(document).ready(function() {
	    	$('select').material_select();
	  		}); 
  		</script>
		<script type="text/javascript">
			$(".button-collapse").sideNav();
		</script>
		<footer class="page-footer" style="background-color: #088A68";>
          
          <div class="footer-copyright" style="background-color: #000";>
            <div class="container">
            Realizada en ©2017 
            <a class="grey-text text-lighten-4 right" href="#!">@Derechos reservados</a>
            </div>
          </div>
        </footer>
	</body>
</html>
