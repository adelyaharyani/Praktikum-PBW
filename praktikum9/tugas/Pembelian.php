<?php
define ("PAJAK", 0.10);

// Array harga barang
$hargaBarang = array(
    "Keyboard" => 150000
);

// Nama barang yang dibeli
$namaBarang = "Keyboard";
// Jumlah beli
$jumlahBeli = 2;

// Mengambil harga satuan dari array
$hargaSatuan = $hargaBarang[$namaBarang];

// Menghitung total harga sebelum pajak
$totalSebelumPajak = $hargaSatuan * $jumlahBeli;

// Menghitung pajak
$pajak = $totalSebelumPajak * PAJAK;

// Menghitung total bayar
$totalBayar = $totalSebelumPajak + $pajak;

// Menampilkan hasil
echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2>";
echo "<hr>";
echo "Nama Barang: $namaBarang<br>";
echo "Harga Satuan: Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli: $jumlahBeli<br>";
echo "Total Harga (Sebelum Pajak): Rp " . number_format($totalSebelumPajak, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong>";
?>
