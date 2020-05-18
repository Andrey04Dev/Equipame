<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$conexion = new Conexion();

	$clima = $_GET['txt_clima'];
	$viaje = $_GET['txt_viaje'];
	$destino = $_GET['txt_destino'];

	$query = "SELECT nombre_prenda FROM tbl_prendas WHERE clima = '".$clima."' AND viaje = '".$viaje."' AND destino = '".$destino."'";
	$conexion->consulta($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	/*$pdf->SetTextColor(3, 3, 3);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetXY(20,30);
	$pdf->Write(3,$clima);

	$pdf->SetTextColor(3, 3, 3);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetXY(70,30);
	$pdf->Write(3,$viaje);

	$pdf->SetTextColor(3, 3, 3);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetXY(130,30);
	$pdf->Write(3,$destino);*/

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetXY(60,45);  // Establece el color del texto (en este caso es blanco) 
	$pdf->SetFillColor(2,157,116);
	$pdf->SetTextColor(240, 255, 240);
	$pdf->Cell(90,8,'Nombre',1,1,'C',true);
	
	$pdf->SetFont('Arial','',10);
	$prendas= array();
		$ejeY = 53;
            $num_fila=0;

            while ($fila = $conexion->extraer_registro()) {
                  $prendas[$num_fila][0] = $fila[0];
                  $num_fila++;
            }
            foreach ($prendas as $prenda) 
            {
            	$pdf->SetXY(60,$ejeY);
            	$pdf->SetTextColor(3, 3, 3);
                $pdf->Cell(90,8,utf8_decode($prenda[0]),1,1,'C',0);
                $ejeY =  $ejeY +8;        
            }

	$pdf->Output('Lista de prendas.pdf','D');
?>