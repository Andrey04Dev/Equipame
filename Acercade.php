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
		    <a href="#" class="brand-logo center" style="font-size: 15px;">Acerca de</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="login.php"><i class="mdi-action-perm-contact-cal left"></i>Admin</a></li>
				<li><a href="index.php"><i class="mdi-action-home left"></i>Principal</a></li>
		      </ul>
		    </div>  
		</nav>

		<div class="container center">
		<div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="images/card.png">
              
            </div>
            <div class="card-content">
            <span class="card-title" style="color:#088A68 ; font-weight: bold;">Equípame Zona Sur</span>
              <p style="text-align: justify;">Una aplicación diseñada para no dejar olvidado ninguno de tus artículos importantes de viajes,
               la cual te brinda una lista personalizada de dichos artículos. ¡Disfrútala!</p>
               <p style="font-weight: bold;"> Desarrollada por:</p>
               <p>Andrey Elizondo</p>
               <p>Jafeth Granados</p>
               <p>Xinia Rodriguez</p>
               <p>Shawny Rodriguez</p>
            </div>
            
          </div>
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
