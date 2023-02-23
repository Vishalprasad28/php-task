<?php
session_start();
if($_SESSION["Loggedin"] == false)
header("Refresh:0;url=index.php");
else {
require_once("person.php");
//initializing the variables with the session values brought from the previous page
$person = unserialize($_SESSION["person_details"]);
$fullname = $person->full_Name;
$email = $person->email;
$phone = $person->phone;
$pic_path = $person->pic_path;
$marksheet = $person->marks;

ob_start();
//Including the fpdf library
require('../vendor/autoload.php');
//pdf creation process goes here
$pdf = new FPDF($orientation='P', $unit='mm', $size='A4');
//adding a new page
$pdf->AddPage();
//setting the font size and the weight
$pdf->SetFont('Arial','B',25);
//printing on the pdf page
$pdf->Cell(0,20,'Your Details',0,0);
//coming to the next line
$pdf->Ln();
// adding image here
$pdf->Image($pic_path,10,30, 50, 50);
$pdf->Ln(55);
  //width,height
$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,'Name:',0,0);
$pdf->Cell(0,10,$fullname,0,1);
$pdf->Cell(50,10,'Phone No:',0,0);
$pdf->Cell(0,10,$phone,0,1);
$pdf->Cell(50,10,'Email:',0,0);
$pdf->Cell(0,10,$email,0,1);
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,10,'Your Marksheet',0,1,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(95,10,'Subject',1,0,'C');
$pdf->Cell(95,10,'Marks',1,1,'C');
$pdf->SetFont('Arial','',16);
foreach ($marksheet as $sub => $marks) {
    $pdf->Cell(95,10,$sub,1,0,'C');
    $pdf->Cell(95,10,$marks,1,1,'C');
}
//pdf creation process ends here
ob_end_clean();
//assigning a file-name depending on the current date 
$filename = date("dmY")."-".date("h:ia").".pdf";
//outputting the pdf file in browser and also storing in the server
$pdf->Output('F',"../pdf-docs/".$filename);
$pdf->Output('I',$filename);
session_destroy();
}
?>