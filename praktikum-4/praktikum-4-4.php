<?php
$prodi = [
    "Teknik Informatika",
    "Teknik Komputer",
    "Ilmu Komputer",
    "Sistem Informasi",
    "Teknologi Informasi",
    "Pendidikan Teknologi Informasi"
];

echo "<b>Daftar Program Studi:</b><br>";
foreach ($prodi as $p) {
    echo $p . "<br>";
}

echo "<br>";

$mahasiswa = [
    "nama" => "Sullyoon",
    "nim" => "245150300111030",
    "prodi" => "Sistem Informasi",
    "semester" => 4
];

echo "<b>Data Mahasiswa:</b><br>";
foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>