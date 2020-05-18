<?php
	require 'FPDF/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->SetXY(45,15);
			$this->Cell(120,10, 'Lista de prendas',0,0,'C');
			$this->Image('images/EQUIPAME.png',154,10,-100);
			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>