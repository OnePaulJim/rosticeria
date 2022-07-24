<?php
include('fpdf/fpdf.php');
date_default_timezone_set('America/El_Salvador');

//recepcion de parametros
$cliente=$_POST["cliente"];
$paquete=$_POST["paquete"];
$cantidad=$_POST["cantidad"];
$precioUnitario=$_POST["precio"];
$formaPago=$_POST["formaPago"];
$fechaHoraCreacion=$_POST["fechaCreacion"];
$folio=$_POST["folio"];
$opcion=$_POST["opcion"];


//podemos definir el ancho en una variable para que no les cueste cambiarlo despues
$ancho = 50;



//definimos la orientacion de la pagina y el array indica el tamaño de la hoja
$pdf=new FPDF('P','mm',array(80,150));


$pdf->AddPage(); 
$pdf->SetFont('Arial','B',10);   

$pdf->setY(52);
$pdf->setX(10);
$pdf->Image('img/RJ1.jpg',25,5,29);
$pdf->setY(5);
$pdf->setX(15);
$pdf->Cell(45,$ancho,"ROSTICERIA JUQUILITA",'B',0,'C');

$pdf->SetFont('Arial','',9);
$pdf->setY(10);
$pdf->setX(15);
$pdf->Cell(45,$ancho,"Cliente: ".$cliente,'B',0,'C');

$pdf->SetFont('Arial','',9);
$pdf->setY(14);
$pdf->setX(15);
$pdf->Cell(45,$ancho,"Fecha: ".$fechaHoraCreacion,'B',0,'C');


$pdf->Ln(6);
$pdf->SetFont('Arial','',10);   
$pdf->setY(19);
$pdf->setX(9);

        //              Encabezado
    $pdf->Cell(20, 53, utf8_decode('Cantidad'),0,0,'C',0);
    $pdf->Cell(25, 53, utf8_decode('Descripción'),0,0,'C',0);
    $pdf->Cell(15, 53, utf8_decode('Precio'),0,0,'C',0);
    //$pdf->Cell(10, 7, utf8_decode(''),0,1,'C',0);

    //              DATOS

    
    for ($i=0; $i < 1; $i++) { 
    
    $pdf->setY(25);
    $pdf->setX(6);
    $pdf->Cell(20, 55, $cantidad,0,0,'C',0);
    $pdf->Cell(20, 55, $paquete,0,0,'C',0);
    $pdf->Cell(20, 55,'$'.$precioUnitario,0,0,'C',0);
    //$pdf->Cell(10, 5, '$'.number_format('200'),0,0,'C',0); las cantidades cambio
    //$pdf->Cell(10, 5, '$'.number_format('100'),0,1,'C',0);
    }

    $pdf->Ln(3);
    //              TOTAL
    $pdf->setX(18);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(63,60,'TOTAL A PAGAR: $'.($cantidad * $precioUnitario),0,0,'L',0);

    $pdf->SetFont('Arial','',8);
    //  $pdf->Cell(10,5,'$'.number_format('4000'));



    $pdf->Ln(12);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(27, 27, 255);
    
    if($formaPago=='0'){

        $pdf->setX(20);
        $pdf->Cell(3,$ancho+6, 'Forma de pago: Efectivo');

    }else{
        
        $pdf->setX(20);
        $pdf->Cell(3,$ancho+6, 'Forma de pago: Transferencia');

    }
    
   
   



    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(255, 45, 1);
    $pdf->setX(25);
    $pdf->Cell(3,$ancho+6, 'Folio: '.$folio);
    $pdf->Ln(5);

    
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0,0,3);
    $pdf->setX(15);
    $pdf->Cell(3,$ancho+6,utf8_decode('¡GRACIAS POR SU COMPRA!'));
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',8);
    $pdf->setX(20);
    $pdf->Cell(3,$ancho+6,utf8_decode('Disfrute Buen Provecho'));
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0,100,0);
    $pdf->setX(14);
    $pdf->Cell(10,67,'Recoga el producto presentando el ');
    $pdf->setX(14);
    $pdf->Cell(1,72,'folio generado en este documento');



    
        if($opcion=='0'){

            $pdf->Output('D','Acuse de pedido.pdf',true);
        }
        else{
            $pdf->Output();
        }
    



?>