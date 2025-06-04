<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Form Pembayaran UKT Mahasiswa</h2>
<form method="post" action="">
    NPM: <input type="text" name="npm" required><br>
    Nama: <input type="text" name="nama" required><br>
    Prodi: <input type="text" name="prodi" required><br>
    Semester: <input type="number" name="semester" required><br>
    Biaya UKT (Rp): <input type="number" name="ukt" required><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm      = $_POST['npm'];
    $nama     = $_POST['nama'];
    $prodi    = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt      = $_POST['ukt'];

    $diskon = 0;

    // Tentukan diskon
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon = 15;
        }
    }

    // Hitung total pembayaran
    $potongan = ($diskon / 100) * $ukt;
    $totalBayar = $ukt - $potongan;

    // Tampilkan hasil
    echo "<h3>Hasil:</h3>";
    echo "NPM : $npm <br>";
    echo "NAMA : $nama <br>";
    echo "PRODI : $prodi <br>";
    echo "SEMESTER : $semester <br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
    echo "DISKON : $diskon% <br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($totalBayar, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
