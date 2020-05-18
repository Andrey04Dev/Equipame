<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	//Primero se añade el fichero que contiene la clase
	/*Esto significa que haremos uso de sus funciones
	incluyendo el archivo una vez, PHP no lo volverá a requerir */
	require_once("conexion.php");
	$servidor = "localhost";
	$usuario = "root";
	$passw = "123";
	$base_datos = "bd_equipame";
	$conexion = new Conexion($servidor,$usuario,$passw,$base_datos);


	function buscarPrendasMostrarIndex( $conexion, $clima,$viaje,$destino){
		$conexion->consulta ("SELECT * FROM tbl_prendas WHERE clima = '$clima' AND viaje = '$viaje' AND destino = '$destino'");
        $datos="";
        
        while($fila = $conexion->extraer_registro()){
            $datos .= "<tr><td>$fila[1]</td></tr>";
        }

        return $datos;
	}

	if (isset($_POST['btn_descarga'])) {
		
		$clima = $_POST['txt_clima'];
		$viaje = $_POST['txt_viaje'];
		$destino = $_POST['txt_destino'];

		buscarPrendasMostrarIndex( $conexion, $clima,$viaje,$destino);
		

	}
	
	function mostrarPrendas($conexion){
        $conexion->consulta ("SELECT * FROM tbl_prendas");
        $datos="";
        
        while($fila = $conexion->extraer_registro()){
            $datos .= "<tr><td>$fila[1]</td></tr>";
        }
        return $datos;  
	}

	function obtenerPrendas($conexion){
        $conexion->consulta ("SELECT * FROM tbl_prendas");
        $datos="";
        
        while($fila = $conexion->extraer_registro()){
            $datos .= "<tr><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td></tr>";
        }
        return $datos;  
	}

	function insertarPrendas($conexion,$nombre_prenda,$clima,$viaje,$destino){

		//INSERTAR - ACTUALIZAR - Comprobamos que la cédula existe buscandolo primero
		$conexion->consulta ("SELECT nombre_prenda FROM tbl_prendas WHERE nombre_prenda = '" .$nombre_prenda . "'");
        
        if ($conexion->extraer_registro()) {	//SI LA CEDULA EXISTE, LA ACTUALIZA
			
			$actualizar = "UPDATE tbl_prendas
						SET nombre_prenda='$nombre_prenda', clima='$clima', viaje='$viaje', destino='$destino'
						WHERE nombre_prenda = '" . $nombre_prenda . "'";
			$conexion->consulta($actualizar);

		}else{	//SI NO EXISTE, LA INSERTA
			$insertar = "INSERT INTO tbl_prendas (nombre_prenda,clima,viaje,destino) 
                    VALUES('$nombre_prenda','$clima','$viaje','$destino')";
			$conexion->consulta($insertar);
		}
	}

	//Si el boton eliminar fue presionado
	if (isset($_POST['btn_eliminar'])) {
		$nombre_prenda = $_POST['txt_nom'];
		
		//Invocamos la funcion ELIMINAR
		eliminarPrendas($conexion,$nombre_prenda);

		//Nos redirecciona a una página especificada
		header("Location: Admin.php");
	}

	function eliminarPrendas($conexion, $nombre_prenda){
		$conexion->consulta ("DELETE FROM tbl_prendas WHERE nombre_prenda = '$nombre_prenda'");
	}

	if (isset($_POST['btn_guardar'])) {
		$nombre_prenda = $_POST['txt_nom'];
		$clima = $_POST['txt_clima'];
		$viaje = $_POST['txt_viaje'];
		$destino = $_POST['txt_destino'];
		

		//Invocamos la funcion INSERTAR
		insertarPrendas($conexion,$nombre_prenda,$clima,$viaje,$destino);

		//Nos redirecciona a una pagina especificada
		header("Location: Admin.php");
	}



	function buscarPrendas($conexion, $dato){
		$conexion->consulta ("SELECT * FROM tbl_prendas WHERE nombre_prenda LIKE '" .$dato . "%'");
		$datos="";

		while ($fila = $conexion->extraer_registro() ) {
            $datos .= "<tr onclick='cargarCombos(this)'><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td></tr>";
        }

		echo $datos; //imprimimos los datos
	}

	if (isset($_GET['datobusqueda'])) {
		buscarPrendas($conexion, $_GET['datobusqueda']);
	}

	//Se verifica si se presiona el boton usando la funcion como medio
	if (isset($_POST['key'])) {

		if ($_POST['key']=='guardar'){
			//Parametros POST provenientes de AJAX
			$nombre_prenda = $_POST['nom'];
			$clima = $_POST['clima'];
			$viaje = $_POST['viaje'];
			$destino = $_POST['destino'];

			//Invocamos la funcion INSERTAR
			insertarPrendas($conexion,$nombre_prenda,$clima,$viaje,$destino);
		}

		if ($_POST['key']=='eliminar') {
			//Parametros POST provenientes de AJAX
			$nombre_prenda = $_POST['nom'];
			//Invocamos la funcion ELIMINAR
			eliminarPrendas($conexion,$nombre_prenda);
		}

		if ($_POST['key']=='descargar'){
			//Parametros POST provenientes de AJAX
			$clima = $_POST['clima'];
			$viaje = $_POST['viaje'];
			$destino = $_POST['destino'];
        	echo buscarPrendasMostrarIndex($conexion,$clima,$viaje,$destino); 
		}

		if ($_POST['key']=='mostrar_prendas') {
			echo mostrarPrendas($conexion);
		}
	}
?>