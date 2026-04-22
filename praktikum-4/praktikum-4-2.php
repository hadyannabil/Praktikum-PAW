<?php

function jumlahkan($num1, $num2) {
    return $num1 + $num2;
}

echo "Hasil 15 + 30 = " . jumlahkan(15, 30) . "<br>";
echo "Hasil 100 + 45 = " . jumlahkan(100, 45) . "<br><br>";

function panjangString($teks) {
    return strlen($teks); 
}

echo "Panjang string 'Hello World': " . panjangString("Hello World") . "<br>";
echo "Panjang string 'Pemrograman Web': " . panjangString("Pemrograman Web") . "<br>";
?>