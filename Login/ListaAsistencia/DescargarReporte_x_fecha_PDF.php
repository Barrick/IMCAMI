<?php
require_once('tcpdf/tcpdf.php'); //Llamando a la Libreria TCPDF
require_once('config.php'); //Llamando a la conexión para BD
date_default_timezone_set('Mexico/General');


ob_end_clean(); //limpiar la memoria


class MYPDF extends TCPDF{
      
    	public function Header() {

            $path = dirname(__FILE__);
            $logo = $path.'/assets/img/imagen.jpg';

            $bMargin = $this->getBreakMargin();
            $auto_page_break = $this->AutoPageBreak;
            $this->SetAutoPageBreak(false, 0);
            $img_file = dirname( __FILE__ ) .'/assets/img/imagen1.jpg';
            $this->Image($img_file, 150, 8, 30, 35, '', '', '', false, 30, '', false, false, 0);
            $this->SetAutoPageBreak($auto_page_break, $bMargin);
            $this->setPageMark();

            $this->Image($logo, 30, 70, 150, 200, '', '', '', false, 300, '', false, false, 0);
            //$this->Image($logo, 180, 12, 15);
	    }

}



//Iniciando un nuevo pdf
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);

 
//Establecer margenes del PDF
$pdf->SetMargins(10, 35, 25);
$pdf->SetHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); //Eliminar la linea superior del PDF por defecto
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); //Activa o desactiva el modo de salto de página automático
 
//Informacion del PDF
$pdf->SetCreator('');
$pdf->SetAuthor('');
$pdf->SetTitle('Informe de Asistencias');
 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

//Agregando la primera página
//$pdf->AddPage('landscape');
$pdf->AddPage();
/*$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(150, 20);
$pdf->Write(0, 'Código: 0014ABC');
$pdf->SetXY(150, 25);
$pdf->Write(0, 'Fecha: '. date('d-m-Y'));
$pdf->SetXY(150, 30);
$pdf->Write(0, 'Hora: '. date('h:i A')); */


$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(10, 20); //Margen en X y en Y
$pdf->SetTextColor(203,193,217);
$pdf->Write(0, 'Innovación en Manufactura, Control');
$pdf->SetXY(10, 25); //Margen en X y en Y
$pdf->SetTextColor(203,193,217);
$pdf->Write(0, 'Automatización y Mantenimiento Industrial');
$pdf->SetXY(10, 30); //Margen en X y en Y
$pdf->SetTextColor(203,193,217);
$pdf->Write(0, 'R.F.C. IMC200515SN0     IMCAMI SA de CV');




$pdf->Ln(25); //Salto de Linea
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0); */
$pdf->SetTextColor(34,68,136);
//$pdf->SetTextColor(255,204,0); //Amarillo
//$pdf->SetTextColor(34,68,136); //Azul
//$pdf->SetTextColor(153,204,0); //Verde
//$pdf->SetTextColor(204,0,0); //Marron
//$pdf->SetTextColor(245,245,205); //Gris claro
//$pdf->SetTextColor(100, 0, 0); //Color Carne
$pdf->SetFont('helvetica','B', 15); 
$pdf->Cell(100,6,'Formato de Asistencia',0,0,'C');


$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0); 
$pdf->SetXY(10, 75);

//Almando la cabecera de la Tabla
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
//$pdf->SetXY(10, 75);

$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));


$sqlTrabajadores = ("SELECT * FROM asistencia WHERE (fecha='$fechaInit' ) ORDER BY fecha ASC");
$query = mysqli_query($con, $sqlTrabajadores);

while ($dataRow = mysqli_fetch_array($query)) {

$pdf->Cell(30,6,'Nombre',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,($dataRow['nombre']),1,0,'C');

$pdf->SetFont('helvetica','B',12);
$pdf->Cell(30,6,'Fecha',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,(date('m-d-Y', strtotime($dataRow['fecha']))),1,1,'C');

$pdf->SetFont('helvetica','B',12);
$pdf->Cell(30,6,'Contacto',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,$dataRow['contacto'],1,0,'C');

$pdf->SetFont('helvetica','B',12);
$pdf->Cell(30,6,'Proyecto',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,$dataRow['proyecto'],1,1,'C');

$pdf->SetFont('helvetica','B',12); 
$pdf->Cell(30,6,'Direccion',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,$dataRow['direccion'],1,0,'C');

$pdf->SetFont('helvetica','B',12); 
$pdf->Cell(30,6,'Correo',1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->Cell(50,6,$dataRow['correo'],1,1,'C');


}


 
/*El 1 despues de  Fecha Ingreso indica que hasta alli 
llega la linea */




//Aqui empieza la otra tabla
$pdf->Ln(20);

//Almando la cabecera de la Tabla
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
//$pdf->SetXY(10, 75);
$pdf->Cell(45,6,'Partida',1,0,'C',1);
$pdf->Cell(45,6,'Equipo',1,0,'C',1);
$pdf->Cell(45,6,'Descripcion',1,0,'C',1);
$pdf->Cell(45,6,'Observaciones',1,1,'C',1); 

$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));


$pdf->SetFont('helvetica','',10);

$sqlTrabajadores = ("SELECT * FROM asistencia WHERE (fecha='$fechaInit' ) ORDER BY fecha ASC");
//$sqlTrabajadores = ("SELECT * FROM trabajadores");

$query = mysqli_query($con, $sqlTrabajadores);
 

while ($dataRow = mysqli_fetch_array($query)) {



        $pdf->Cell(45,40,($dataRow['partida']),1,0,'C');
        $pdf->Cell(45,40,$dataRow['equipo'],1,0,'C');
        $pdf->Cell(45,40,$dataRow['descripcion'],1,0,'C');
        $pdf->Cell(45,40,$dataRow['observaciones'],1,1,'');
        

       
    } 


//apartado de las firmas
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
//$pdf->SetXY(15, 20); //Margen en X y en Y
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(40, 190);
$pdf->Write(30, 'Tecnico');
$pdf->SetTextColor(0, 0, 0); //Color Negrita
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(40, 230);
$pdf->Write(30, 'Nombre y Firma');
$pdf->SetTextColor(0, 0, 0); //Color Negrita

$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
//$pdf->SetXY(15, 20); //Margen en X y en Y
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(40, 235);
$pdf->Write(30, 'IMCAMI S.A DE C.V');
$pdf->SetTextColor(0, 0, 0); //Color Negrita

$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(130, 203);
$pdf->Write(0, 'Recibe');
$pdf->SetXY(130, 230);
$pdf->Write(30, 'Nombre y Firma');

$pdf->SetXY(30, 267); //Margen en X y en Y
$pdf->SetTextColor(203,193,217);
$pdf->Write(0, 'Tlalnepantla de Baz, Estado de México.');





//$pdf->AddPage(); //Agregar nueva Pagina

$pdf->Output('Reporte Asistencias_'.date('d_m_y').'.pdf', 'I'); 
// Output funcion que recibe 2 parameros, el nombre del archivo, ver archivo o descargar,
// La D es para Forzar una descarga
