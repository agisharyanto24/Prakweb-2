<?php
// didefinisikan variable konstanta
define ('PHI', 3.14);

// soal 1. cari nilai dari luas lingkaran dengan jari jari 8
// soal 2. cari nilai dari keliling lingkaran dengan jari-jari 8

// didefinisikan jari jari
$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas lingkaran dengan jari jari ' .$jari. ' adalah ' .$luas;
echo '<br/>Keliling lingkaran nya adalah ' .$kll;
?>