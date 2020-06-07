<?php //include('header_dashboard.php'); ?>
<?php //include('session.php'); ?>
<?php //include('view_project.php'); ?>
<?php //$get_id = $_GET['id']; ?>
<?php





//$query =("select a.*, b.* from project a,client b where a.client_id= '$get_id'")or die(mysql_error());
//$row = mysql_fetch_array($query);
									

require('fpdf/fpdf.php');
class PDF extends FPDF{
	function Header(){
		global $title;
		$w = $this -> GetStringWidth($title);
    $this->Image('AzwLogo.png',30,6,30);
     $this->SetFont('Times','B',25);
    $this->Cell(60);
    $this->Cell(80,10,'AZ Welding',0,0,'C');
	$this->Ln(10);
	$this->SetFont('Times','B',10);
	$this->Cell(60);
	$this->Cell(80,10,'Lot 167, Kampung Dalam Kemunting ',0,0,'C');
	$this->Ln(5);
	$this->Cell(60);
	$this->Cell(80,10,'Jalan Jerteh, 16800 Pasir Puteh, Kelantan.  ',0,0,'C');
	$this->Ln(5);
	$this->Cell(60);
	$this->Cell(80,10,'Tel. 019-9494017  ',0,0,'C');
	$this->SetFont('Times','B',15);
	$this->Ln(20);
	$this->Cell($w,10,$title,0,0,'C');
	$this->Ln(20);
	}
	
	function Chapter(){
	}
	
	function Mybody(){
	}
	
	function Layout(){
	}
	
	function Footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'R');
	}
}




$pdf = new PDF();
$title = 'Project Detail';
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf -> Cell(10,10,"Project Name : ",0,0);



$pdf->Output();

