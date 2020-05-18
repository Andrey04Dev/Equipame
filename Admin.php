<?php 

include_once('mantenimiento.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title>Equípame Zona Sur</title>
		<meta charset='utf-8'>
		<meta name="keyword" content="HTML5, CSS3, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

		<link rel="shortcut icon" href="rsc/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	</head>

  	<body>
  		<nav style="background-color: #000">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center" style="font-size: 15px;">Administrador</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="logout.php"><i class="mdi-action-home left"></i>Principal</a></li>
            <li><a href="Acercade.php"><i class="mdi-action-info left"></i>Acerca de</a></li>
            <li><a href="Ayuda2.php"><i class="mdi-action-help left"></i>Ayuda</a></li>     
          </ul>
          </div>  
        </nav>
  		<div class="container">
  		<form method="POST" id="frm_prendas" name="frm_prendas" action="mantenimiento.php">
        <div class="row">
          <div class="col s12 m12 l90">
            <div class="container center-align" style="margin-top: 30px";>
          <img class="responsive-img materialboxed" data-caption="CSS3 Image" src="images/EQUIPAME.png"/>
        </div>  

            <div class="row">
              <div class="input-field col s12">
                <input name ="txt_nom" id="txt_nom" type="text" class="validate" onkeypress=" return validarOnlyLet(event)">
                <label for="username">Nombre Prenda</label>
              </div>     
            </div>

            <div class="input-field col s12">
              <select name="txt_clima" id="txt_clima" >
                <option value="" disabled selected> Tipo de clima</option>
                <option value="Soleado">Soleado</option>
                <option value="Lluvioso">Lluvioso</option>
                <option value="Frío">Frío</option>         
              </select>        
            </div>

            <div class="input-field col s12">
              <select name="txt_viaje" id="txt_viaje">
                <option value="" disabled selected>Categoría</option>
                <option value="Turístico">Turístico</option>
                <option value="Negocios">Negocios</option>
                <option value="Personal">Personal</option>
              </select>
            </div>
                    

            <div class="input-field col s12">
              <select name="txt_destino" id="txt_destino">
                <option value="" disabled selected>Destino</option>
                <option value="Playa">Playa</option>
                <option value="Montaña">Montaña</option>
                <option value="Ciudad">Ciudad</option>
                <option value="Río">Río</option>
                <option value="Campo">Campo</option>
              </select>
            </div>
            <form class="col s12 m4 15">
              <a href="javascript:location.reload()"><button class="btn waves-effect waves-ligth"  type="button" style="background-color: #088A68; margin-top: 20px; margin-right: 20px" value="Guardar" name="btn_guardar" tabindex="5" onclick="validar()">Insertar</button></a>
              <a href="javascript:location.reload();" onclick="aviso(); return false;"><button class="btn waves-effect waves-ligth" style="background-color: #088A68; margin-top: 20px;" type="button" value="Eliminar" name="btn_eliminar" tabindex="6" onclick="">Eliminar</button></a>
            </form>
          </div>
        </div>
      </form>

      <h5 class="center-align">Buscador dinámico</h5>

        <form method="post" name="frm_busqueda">
    			<input type="text" class="center-align" value="" placeholder="Buscar por prenda" size="50" name="txt_busq" tabindex="15" onkeypress=" return validarOnlyLet(event)"onkeyup="cargarFuncionarios(txt_busq.value)">
    		</form>
    			<br><br>

  			<div>
  				<table class="responsive-table">
                    <thead>
                      <td class="center-align" style="font-weight: bold; color: #088A68">Prenda</td>
                      <td class="center-align" style="font-weight: bold; color: #088A68">Clima</td>
                      <td class="center-align" style="font-weight: bold; color: #088A68">Viaje</td>
                      <td class="center-align" style="font-weight: bold; color: #088A68">Destino</td>
                    </thead>
  					<tbody id="cuerpotabla">
  						<?php echo obtenerPrendas($conexion); ?>
  					</tbody>
  				</table>
  			</div>

      <script type="text/javascript">
      function validar() {
        var txt_nom = document.getElementById("txt_nom").value;
        var txt_clima = document.getElementById("txt_clima").value;
        var txt_viaje = document.getElementById("txt_viaje").value;
        var txt_destino = document.getElementById("txt_destino").value;

        if (txt_nom.length == 0 || /^\s+$/.test(txt_nom) || txt_clima == "" || txt_viaje == "" || txt_destino == "") {
             alert('¡Algún campo de texto esta vacío!');
             return false;
        }else{
          insertarPrendasAjax()
          alert("¡Se ha ingresado correctamente la prenda!");
          return true;
        }
      }
      </script>

      <script language="JavaScript">
      function aviso(){
        if (!confirm("¿Está seguro que desea eliminar este elemento?")) {
          return false;
        }
        else {
          eliminarPrendasAjax()
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
  		<span id="msjbox"></span>
  		</div>
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