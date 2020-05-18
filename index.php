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
		    <a href="#" class="brand-logo center" style="font-size: 15px;">Principal</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="login.php"><i class="mdi-action-perm-contact-cal left"></i>Admin</a></li>
				<li><a href="Acercade.php"><i class="mdi-action-info left"></i>Acerca de</a></li>
				<li><a href="Ayuda1.php"><i class="mdi-action-help left"></i>Ayuda</a></li>		
		      </ul>
		    </div>  
		</nav>
		

		<div class="container">
			<div class="row">

				<div class="col s12 m12 l90">
			<div class="container center-align" style="margin-top: 30px";>
				<img class="responsive-img materialboxed" data-caption="CSS3 Image" src="images/EQUIPAME.png"/>
			</div>
			<strong>

				<div>
				    <p class="center-align" style="font-weight: bold;";>App diseñada para organizar tu equipaje.</p>
				</div>
				</strong>
				<form name="frm_combos" type="post">
			    <div class="input-field col s12">
				    <select name="txt_clima" id="txt_clima">
				      <option value="" disabled selected>Escoja el tipo de clima</option>
				      <option value="Soleado" id="soleado">Soleado</option>
				      <option value="Lluvioso" id="lluvioso">Lluvioso</option>
				      <option value="Frio" id="Frio">Frío</option>
				    </select>
				</div>


			
				  <div class="input-field col s12">
				    <select name="txt_viaje" id="txt_viaje">
				      <option value="" disabled selected>Escoja la categoría del viaje</option>
				      <option value="Turístico">Turístico</option>
				      <option value="Negocios">Negocios</option>
				      <option value="Personal">Personal</option>
				    </select>
				  </div>


			  <div class="input-field col s12">
			    <select name="txt_destino" id="txt_destino">
			      <option value="" disabled selected>Escoja el tipo de destino</option>
			      <option value="Playa">Playa</option>
			      <option value="Montaña">Montaña</option>
			      <option value="Ciudad">Ciudad</option>
			      <option value="Río">Río</option>
			      <option value="Campo">Campo</option>
			    </select> 
			  </div>
			  <div class="container center-align">
			  	<button  onclick="enviar('reporte.php')" class="btn waves-effect waves-ligth" style="background-color: #088A68; margin-top: 20px;" type="submit" ">Descargar</button>
			  	<button id="btn_descarga" name="btn_descarga" class="btn waves-effect waves-ligth"  id="btn_mostrar" name="btn_mostrar" onclick="validar()" style="background-color: #088A68; margin-top: 20px;" type="button">Generar previo</button>
			  </div>
			  </form>

				<form method="post" action="">
					<div class="row">
						<div class="col s12 m12 l90">
							<table class="responsive-table">                  		
								<thead>
			                    	<td class="center-align">Previsualizador de lista</td>
			                  	</thead>
								<tbody id="cuerpotabla">
								</tbody>
							</table>
						</div>
					</div>
				</form>
			    </div>
			</div>
		</div>		
		<footer class="page-footer" style="background-color: #088A68";>
          
          <div class="footer-copyright" style="background-color: #000";>
            <div class="container">
            Realizada en ©2017 
            <a class="grey-text text-lighten-4 right" href="#!">@Derechos reservados</a>
            </div>
          </div>
        </footer>
        <script language="javascript" type="text/javascript">
		function enviar(pagina){
			var txt_clima = document.getElementById("txt_clima").value;
			var txt_viaje = document.getElementById("txt_viaje").value;
			var txt_destino = document.getElementById("txt_destino").value;
			if ( txt_clima == "" || txt_viaje == "" || txt_destino == "") 
			{
			    alert('Selecione todas las opciones');
			    return false;
			    location.reload();
			}
			else
			{
			    document.frm_combos.action = pagina;
				document.frm_combos.submit();
			    alert("Descargando documento");
			    return true;
			}
		}
		</script>
		<script language="javascript" type="text/javascript">
    		function validar() {
			    var txt_clima = document.getElementById("txt_clima").value;
			    var txt_viaje = document.getElementById("txt_viaje").value;
			    var txt_destino = document.getElementById("txt_destino").value;

			    if ( txt_clima == "" || txt_viaje == "" || txt_destino == "") {
			           alert('Selecione todas las opciones');
			           return false;
			           location.reload();
			    }else{
			        mostrarPrendasAjax()
			        alert("Se mostro la lista abajo");
			        return true;
			    }
			}
		</script>
   		<script type="text/javascript">
			$(document).ready(function() {
	    	$('select').material_select();
	  		}); 
  		</script>
		<script type="text/javascript">
			$(".button-collapse").sideNav();
		</script>
	</body>
</html>

<!-- SELECT nombre_prenda FROM `tbl_prendas` WHERE clima =1 AND viaje = 1 AND destino=1 -->