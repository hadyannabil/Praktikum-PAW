<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function kuliah() {
        echo $this->nama . " ($this->nim) prodi " . $this->prodi . " sedang mengikuti perkuliahan.<br>";
    }

    public function ujian() {
        echo $this->nama . " ($this->nim) prodi " . $this->prodi . " sedang mengikuti ujian.<br>";
    }

    public function praktikum() {
        echo $this->nama . " ($this->nim) prodi " . $this->prodi . " sedang mengikuti praktikum.<br>";
    }
}

$mhs1 = new Mahasiswa("245150200111035", "Hadyan", "Teknik Informatika");
$mhs2 = new Mahasiswa("245150300111030", "Sullyoon", "Sistem Informasi");

echo "<b>Mahasiswa 1:</b><br>";
$mhs1->kuliah();
$mhs1->ujian();
$mhs1->praktikum();

echo "<br><b>Mahasiswa 2:</b><br>";
$mhs2->kuliah();
$mhs2->ujian();
$mhs2->praktikum();
?>