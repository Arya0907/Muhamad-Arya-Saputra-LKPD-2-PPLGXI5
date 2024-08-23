<?php

$hbd = "Selamat Ulang Tahun yang ke-17";

if(preg_match("/\d/",$hbd)) {
    $pisah = preg_replace("/[^0-9]/","",$hbd);
    $number = implode(",",str_split($pisah,2));
    echo "Selamat ulang tahun yang ke 17" ;
    echo "<br>";
    echo "text mengandung angka : " . $number ;
} else {
    echo "Selamat ulang tahun brow" ;
    echo "text tidak mengandung angka";
}




?>