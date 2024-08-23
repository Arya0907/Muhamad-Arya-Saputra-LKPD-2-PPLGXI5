<?php
$data = [80,90,75,100,85,100,66];
$cari = 100;

$hitung = array_count_values($data)[$cari];

echo $hitung;

?>