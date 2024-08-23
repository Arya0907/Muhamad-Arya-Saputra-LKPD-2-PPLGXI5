<?php
$usia=[12,15,17,20,25,30,35,40,45,50];
$dewasa = 0;
$AnakAnak= 0;

foreach ($usia as $umur) {
if ($umur>=17){
    $dewasa++;  
}else{
    $AnakAnak++;
}
}

echo "list usia "; foreach($usia as $umur2){
    echo $umur2.",";
};
echo "<br>";
echo "Jumlah kategori Dewasa :".$dewasa;
echo "<br>";
echo "jumlah kategori Anak Anak :".$AnakAnak;
?>