<?php
$angka1 = [80,77,65,89,55,12,90,86];
$angka2 = [77,99,55,81,45,90,91,98];



echo "yang ada di kedua variabel : ";
echo "<br>";
$membandingkan= array_intersect($angka1,$angka2);


foreach($membandingkan as $membandingkan1){
    echo $membandingkan1.","; 
}

echo "<br>";

$membandingkan2 = array_diff($angka1,$angka2);

echo "yang tidak ada di kedua variabel : ";
echo "<br>";
foreach($membandingkan2 as $membandingkan22){
    echo $membandingkan22.","; 
}

?>