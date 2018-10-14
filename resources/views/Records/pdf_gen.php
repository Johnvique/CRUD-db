<?php
//include files
require_once($_SERVER['DOCUMENT_ROOT'].'/tcpdf/config/lang/eng.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

//add some content using class methods

//Close and output PDF document
$pdf->Output('filename.pdf', 'I');
?>