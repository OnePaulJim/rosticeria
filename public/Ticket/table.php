<?php
  require('fpdf/fpdf.php');
  
  //require('fpdf.php');
  
  class PDF extends FPDF
  {
  //Cabecera de página
     function Header()
     {
      //Logo
      $this->Image("img/portadas/portada3.jpg" , 10 ,8, 35 , 38 , "JPG" ,"http://www.mipagina.com");
      //Arial bold 15
      $this->SetFont('Arial','B',15);
      //Movernos a la derecha
      $this->Cell(80);
      //Título
      $this->Cell(60,10,'Titulo del archivo',1,0,'C');
      //Salto de línea
      $this->Ln(20);
        
     }
     
     //Pie de página
     function Footer()
     {
      //Posición: a 1,5 cm del final
      $this->SetY(-15);
      //Arial italic 8
      $this->SetFont('Arial','I',8);
      //Número de página
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
     }
     //Tabla simple
     function TablaSimple($header)
     {
      //Cabecera
      foreach($header as $col)
      $this->Cell(40,7,$col,1);
      $this->Ln();
     
        $this->Cell(40,5,"hola",1);
        $this->Cell(40,5,"hola2",1);
        $this->Cell(40,5,"hola3",1);
        $this->Cell(40,5,"hola4",1);
        $this->Ln();
        $this->Cell(40,5,"linea ",1);
        $this->Cell(40,5,"linea 2",1);
        $this->Cell(40,5,"linea 3",1);
        $this->Cell(40,5,"linea 4",1);
     }
     
     //Tabla coloreada
  function TablaColores($header)
  {
  //Colores, ancho de línea y fuente en negrita
  $this->SetFillColor(255,0,0);
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(.3);
  $this->SetFont('','B');
  //Cabecera
  
  for($i=0;$i<count($header);$i++)
  $this->Cell(40,7,$header[$i],1,0,'C',1);
  $this->Ln();
  //Restauración de colores y fuentes
  $this->SetFillColor(224,235,255);
  $this->SetTextColor(0);
  $this->SetFont('');
  //Datos
     $fill=false;
  $this->Cell(40,6,"hola",'LR',0,'L',$fill);
  $this->Cell(40,6,"hola2",'LR',0,'L',$fill);
  $this->Cell(40,6,"hola3",'LR',0,'R',$fill);
  $this->Cell(40,6,"hola4",'LR',0,'R',$fill);
  $this->Ln();
        $fill=!$fill;
        $this->Cell(40,6,"col",'LR',0,'L',$fill);
  $this->Cell(40,6,"col2 \nfrekekfejbrkfjbekfjwb one",'LR',0,'L',$fill);
  $this->Cell(40,6,"col3",'LR',0,'R',$fill);
  $this->Cell(40,6,"col4",'LR',0,'R',$fill);
  $fill=true;
     $this->Ln();
     $this->Cell(160,0,'','T');
  }
  
     
     
  }
  
  $pdf=new PDF();
  //Títulos de las columnas
  $header=array('Columna 1','Columna 2','Columna 3','Columna 4');
  $pdf->AliasNbPages();
  //Primera página
  $pdf->AddPage();
  $pdf->SetY(65);
  //$pdf->AddPage();
  $pdf->TablaSimple($header);
  //Segunda página
  $pdf->AddPage();
  $pdf->SetY(65);
  $pdf->TablaColores($header);
  $pdf->Output();
  
  /*
  class PDF extends FPDF
  {
    function createTable($header,$data){
      $width=[40,60,30];
      $this->SetFillColor(3,161,252);
      $this->SetTextColor(255,255,255);
      $this->SetDrawColor(3,161,252);
      for($i=0;$i<count($header);$i++)
      {
        $this->Cell($width[$i],7,$header[$i],1,0,'C',true);
      }
      $this->Ln();
      $this->SetFillColor(215,244,247);
      $this->SetTextColor(0,0,0);
      $fill=false;
      foreach($data as $row){
        $this->Cell($width[0],7,$row[0],1,0,'L',$fill);
        $this->Cell($width[1],7,$row[1],1,0,'L',$fill);
        $this->Cell($width[2],7,$row[2],1,0,'L',$fill);
        $this->Ln();
        $fill=!$fill;
      }
    }
  }

  $pdf=new PDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','',12);
  //Table Header
  $header=["Name","Email","Age"];
  //Table Rows
  $data=[
    ["Ram","ram@gmail.com",25],
    ["Sam","sam@gmail.com",21],
    ["Kumar","kumar@gmail.com",33],
    ["Bala","bala@gmail.com",35],
    ["Raj","raj@gmail.com",28],
    ["Tom","tom@gmail.com",30],
  ];
  $pdf->createTable($header,$data);
  $pdf->Output();
  */
?>