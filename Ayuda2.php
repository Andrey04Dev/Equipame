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
		        <li><a href="Admin.php"><i class="mdi-action-perm-contact-cal left"></i>Admin</a></li>
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

				<p style="font-weight: bold; text-align: justify;">Usar el administrador de la app Equípame es muy fácil, si eres nuevo, estos pasos te ayudarán.</p>
				<h6 style="font-weight: bold;color: #088A68;" class="center-align">Insertar prendas</h6>

				<p style="font-weight: bold; color: #088A68;">
			      Paso 1.
			    </p>
			    <p>Escribir el nombre de la prenda en el espacio "Nombre Prenda"</p>

			    <p style="font-weight: bold; color: #088A68;">
			      Paso 2.
			    </p>
			    <p>Seleccionar todas la opciones que se adapten a la prenda.</p>

			    <p style="font-weight: bold; color: #088A68;">
			      Paso 3.
			    </p>
			    <p>Hacer clic en el botón "Insertar"</p>

			    <br>

			    <h6 style="font-weight: bold;color: #088A68;" class="center-align">Eliminar prendas</h6>

				<p style="font-weight: bold; color: #088A68;">
			      Paso 1.
			    </p>
			    <p>Escribir el nombre de la prenda en el espacio "Nombre Prenda"</p>

			    <p style="font-weight: bold; color: #088A68;">
			      Paso 2.
			    </p>
			    <p>Hacer clic en el botón "Eliminar"</p>

			    <p style="font-weight: bold; color: #088A68;"class="center-align">
			      NOTA.
			    </p>

			    <p style="font-weight: bold; text-align: justify;">
			      Para asegurarte que ambas acciones se cumplan, el administrador posee un buscador dinámico, al igual que una tabla donde se muestran todas las prendas almacenadas para una mejor visualización de las mismas.
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
