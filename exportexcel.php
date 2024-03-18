<?php
require_once 'connection.php';

function filterData(&$str){
  $str = preg_replace("/\t/","\\t", $str);
  $str = preg_replace("/\r?\n/", "\\n", $str);
   if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

$fileName = "Application_Catalog_" . date('Ymd') . ".xls";
$fields = array('ID', 'Name', 'Vendor', 'License Manager', 'Open iT Support', 'Other Notes');
$excelData = implode("\t", array_values($fields)) . "\n";

$query = $conn->query("SELECT * FROM application ORDER BY ID ASC");
if($query->num_rows > 0){
    // Output each row of the data
    while($row = $query->fetch_assoc()){
        $lineData = array($row['ID'], $row['Name'], $row['Vendor'], $row['LicenseManager'], $row['OpeniTSupport'], $row['OtherNotes']);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
}else{
    $excelData .= 'No records found...'. "\n";
}

header("Content-Disposition: attachment; filename=\"$fileName\"");
header("Content-Type: application/vnd.ms-excel");
echo $excelData;

exit;

 ?>
