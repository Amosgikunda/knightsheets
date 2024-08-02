<?php
require 'vendor/autoload.php';


if (($_FILES['fileToUpload']['name'] != "")) {
    // Where the file is going to be stored
    $target_dir = 'files/';
    $file = $_FILES['fileToUpload']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['fileToUpload']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Sorry, file already exists.";
    } else {
        move_uploaded_file($temp_name, $path_filename_ext);
        echo "Congratulations! File Uploaded Successfully.";
    }
}

use \PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;


//load the uploaded spreadsheet
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("$path_filename_ext");

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$spreadsheet->getActiveSheet()->getProtection()->setSheet(true);

//create a new pdf using mdf library
$protection = $spreadsheet->getActiveSheet()->getProtection();
$protection->setPassword('PhpSpreadsheet');
$protection->setSheet(true);
$protection->setSort(true);
$protection->setInsertRows(true);
$protection->setFormatCells(true);



$date = date('d-m-y-' . substr((string)microtime(), 1, 8));
$date = str_replace(".", "", $date);
$newfilename = "export_" . $date . ".xlsx";

try {

    $writer->save($newfilename);
    $content = file_get_contents($newfilename);
} catch (Exception $e) {
    exit($e->getMessage());
}
//make the file downloadable
header("Content-Disposition: attachment; filename=" . $newfilename);

unlink($newfilename);
exit($content);
