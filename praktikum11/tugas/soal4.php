<h3>Soal 4 - Cek Genap / Ganjil</h3>
<form method="post">
    Masukkan angka: <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    echo ($angka % 2 == 0) ? "Angka $angka adalah Genap" : "Angka $angka adalah Ganjil";
}
?>
