<?php
$mysqli = new mysqli("localhost", "f0491075_oc", "a141", "f0491075_oc");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
require('tfpdf/tfpdf.php');
$pdf = new tFPDF();
$pdf->AddPage();
$pdf->SetMargins(5, 5, 5); 
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',12);
$pdf->Cell(190,10,'ОС',0,1,'C');
$pdf->SetFillColor(255,255,255);
$pdf->SetFontSize(6);
$header = array("№ п/п","Название","Тип оборудования","Разрядность","Разработчик","Кол. пользоватей","Цифровой ключ","Дата приобретения","Дата окончания","URL магазина");
$w = array(8,26,21,18,20,20,22,20,18,27);
$h = 6;
for ($c = 0; $c < 10; $c++){
    $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
}
$pdf->Ln();
$result = $mysqli->query("SELECT os_name, os_hwtype, os_x, os_dev, os_usnum, key_dk, buydate_dk, expdate_dk, url_ds FROM dig_keys
	INNER JOIN os ON os.id = dig_keys.id_os INNER JOIN dig_shop ON dig_shop.id_ds=dig_keys.id_ds");
if ($result){
$counter = 1;
    while ($row = $result->fetch_row()){
    $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
    $pdf->Cell($w[1],$h,$row[0],'LRB');
    for ($c = 2; $c < 10; $c++){
		if ($c==7 || $c==8){
        $row[$c-1] = date('d-m-Y', strtotime($row[$c-1]));
        }
        $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
     }
    $pdf->Ln();
    $counter++;
    }
}
$pdf->Output('OS.pdf','D');
exit();
?>
