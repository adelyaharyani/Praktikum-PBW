<?php
// Tipe Data String
$nama = "Budi";
echo "Nama: " . $nama . "<br>";

// Tipe Data Integer
$umur = 25;
echo "Umur: " . $umur . "<br>";

// Tipe Data Float
$beratBadan = 65.5;
echo "Berat Badan: " . $beratBadan . " kg<br>";

// Tipe Data Boolean
$isActive = true;
echo "Status Aktif: " . ($isActive ? "Aktif" : "Tidak Aktif") . "<br>";

// Tipe Data Array
$hobi = array("Membaca", "Olahraga", "Musik");
echo "Hobi: " . implode(", ", $hobi) . "<br>";

// Tipe Data Object
class Mahasiswa {
    public $nama;
    public $umur;

    function setData($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    function tampilkan() {
        return "Nama: $this->nama, Umur: $this->umur tahun";
    }
}

$mhs = new Mahasiswa();
$mhs->setData("Andi", 21);
echo "Data Mahasiswa: " . $mhs->tampilkan() . "<br>";

// Tipe Data NULL
$nilai = null;
echo "Nilai: ";
var_dump($nilai);
?>
