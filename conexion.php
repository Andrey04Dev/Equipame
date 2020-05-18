<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '123');
   define('DB_DATABASE', 'bd_equipame');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	class Conexion
	{
		private $servidor;
		private $usuario;
		private $clave;
		private $base_datos;
		private $conexion;

		function __construct()
		{
			$this->servidor = "localhost";
			$this->usuario = "root";
			$this->clave = "123";
			$this->base_datos = "bd_equipame";
			$this->conectar_base_datos();
		}

		private function conectar_base_datos()
		{
			$this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->clave);
			mysqli_select_db($this->conexion, $this->base_datos) or die (mysqli_error($this->conexion));
			mysqli_query ($this->conexion, "SET NAMES 'utf8'");

			return $this->conexion;
		}

		public function consulta($consulta)
		{
			$this->resultado = mysqli_query($this->conexion, $consulta);
		}

		public function extraer_registro ()
		{
			if ($fila = mysqli_fetch_row($this->resultado)) {
				return $fila;
			} else {
				return false;
			}
		}
	}
?>