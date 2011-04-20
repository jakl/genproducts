<?php
$csv = $_POST['data'];
header("Cache-Control: no-cache");
header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=products.csv");
print $csv;
