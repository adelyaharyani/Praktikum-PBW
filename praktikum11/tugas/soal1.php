<h3>Soal 1 - Tentukan Jenis Kendaraan</h3>
<form method="post">
    Masukkan jumlah roda: <input type="number" name="roda">
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahRoda = $_POST['roda'];
    switch ($jumlahRoda) {
        case 2:
            echo "Kendaraan ini adalah Motor";
            break;
        case 4:
            echo "Kendaraan ini adalah Mobil";
            break;
        case 6:
            echo "Kendaraan ini adalah Truk";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
}
?>
