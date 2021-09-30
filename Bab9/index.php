<?php 

// Persegi
$sisi = 4;
$luas_persegi = $sisi * $sisi;
echo "=== PERSEGI === <br>";
echo "Panjang sisi = $sisi <br>";
echo "Luas persegi = $luas_persegi <br>";
echo "<br>";

// Segitiga
$alas = 10;
$tinggi = 12;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "=== SEGITIGA === <br>";
echo "Panjang alas = $alas <br>";
echo "Tinggi segitiga = $tinggi <br>";
echo "Luas segitiga = $luas_segitiga <br>";
echo "<br>";

// TRAPESIUM
$a = 8;
$b = 20;
$t = 15;
$luas_trapesium = 0.5 * ($a+$b) * $t;
echo "=== TRAPESIUM === <br>";
echo "Panjang sisi A = $a <br>";
echo "Panjang sisi B = $b <br>";
echo "Tinggi traperium = $t <br>";
echo "Luas trapeium = $luas_trapesium <br>";
echo "<br>";

// PERMUKAAN TABUNG
$phi = 3.14;
$r = 7;
$tt = 15;
$tabung = (2 * $phi * $r * $r) + (2 * $phi* $r * $t);
echo "=== PERMUKAAN TABUNG === <br>";
echo "Panjang jari-jari = $r <br>";
echo "Tinggi tabung = $tt <br>";
echo "Luas tabung =  $tabung <br>";
echo "<br>";

// PERMUKAAN LINGKARANG
$pi = 3.14;
$j = 7;
$lingkarang = $pi * $r * $r;
echo "=== PERMUKAAN LINGKARAN === <br>";
echo "Panjang jari-jari = $j <br>";
echo "Luas permukaan lingkaran =  $lingkarang <br>";
echo "<br>";
?>