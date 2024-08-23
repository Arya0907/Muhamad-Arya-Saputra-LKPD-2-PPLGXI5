<?php
$uang = 158500;
$pecahan = [100000,50000, 20000, 10000, 5000, 2000, 1000, 500];
$hasil = [];

foreach ($pecahan as $nilai) {
    $hasil[$nilai] = intdiv($uang, $nilai);
    $uang %= $nilai;
}

echo "<br>";
echo "<br>";
echo "Lembar Rupiah";
echo "<br>";

foreach ($hasil as $nilai => $lembar) {
    echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
}