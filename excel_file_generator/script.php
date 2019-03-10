<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$jsonData = file_get_contents("http://142.93.213.121/api/v1/plain");
$data = json_decode($jsonData, true);

echo "Updating...";

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', "TeamBat");
$sheet->setCellValue('A2', $data["a"]);
$sheet->setCellValue('B1', "BBatScore");
$sheet->setCellValue('B2', $data["b"]);
$sheet->setCellValue('C1', "wickets");
$sheet->setCellValue('C2', $data["c"]);
$sheet->setCellValue('D1', "RunRate");
$sheet->setCellValue('D2', $data["d"]);
$sheet->setCellValue('E1', "Overs");
$sheet->setCellValue('E2', $data["e"]);
$sheet->setCellValue('F1', "Bat1Nane");
$sheet->setCellValue('F2', $data["f"]);
$sheet->setCellValue('G1', "Bat1Score");
$sheet->setCellValue('G2', $data["g"]);
$sheet->setCellValue('H1', "Bat2Name");
$sheet->setCellValue('H2', $data["h"]);
$sheet->setCellValue('I1', "Bat2Score");
$sheet->setCellValue('I2', $data["i"]);
$sheet->setCellValue('J1', "TrailBy");
$sheet->setCellValue('J2', $data["j"]);
$sheet->setCellValue('K1', "Bowler");
$sheet->setCellValue('K2', $data["k"]);
$sheet->setCellValue('L1', "Runs");
$sheet->setCellValue('L2', $data["l"]);
$sheet->setCellValue('M1', "ThisOver");
$sheet->setCellValue('M2', $data["m"]);
$sheet->setCellValue('N1', "");
$sheet->setCellValue('N2', $data["n"]);

$writer = new Xlsx($spreadsheet);
$writer->save('XAML/Book1.xlsx');

?>

<html>
<body>

</body>
<script>
    setInterval(function () {
        location.reload();
    },2000);
</script>
</html>
