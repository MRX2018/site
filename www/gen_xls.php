<?php
require_once('Classes/PHPExcel.php');
require_once('Classes/PHPExcel/Writer/Excel2007.php');
$mysqli = new mysqli("localhost", "f0491075_oc", "a141", "f0491075_oc");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
}
    $result = $mysqli->query("SELECT os_name, os_hwtype, os_x, os_dev, os_usnum,
	key_dk, buydate_dk, expdate_dk, url_ds FROM dig_keys
	INNER JOIN os ON os.id = dig_keys.id_os 
	INNER JOIN dig_shop ON dig_shop.id_ds=dig_keys.id_ds");
$xls = new PHPExcel();
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('ОС');
$sheet->setCellValue("A1", 'ОС');
$sheet->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('ddebf7');
$sheet->mergeCells('A1:J1');
$sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$c = 0;
$header = array("№ п/п","Название","Тип оборудования","Разрядность","Разработчик","Кол. пользоватей","Цифровой ключ","Дата приобретения","Дата окончания","URL магазина");
foreach ($header as $h){
    $sheet->setCellValueByColumnAndRow($c,2,$h);
    $sheet->getColumnDimensionByColumn($c)->setAutoSize(true);
    $c++;
    }
if ($result){
    $r = 3;
    while ($row = $result->fetch_row()){
    $c = 0;
    $sheet->setCellValueByColumnAndRow($c,$r,$r-2);
    $c++;
    foreach ($row as $cell){
    if ($c==7 || $c==8){
    $cell = date('d-m-Y', strtotime($cell));
    }
    $sheet->setCellValueByColumnAndRow($c,$r,$cell);
    $c++;
    }
    $r++;
    }
}
header('Content-Type: application/xls');
header('Content-Disposition: inline; filename=OS.xls');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
$objWriter = new PHPExcel_Writer_Excel5($xls);
$objWriter->save('php://output');
?>