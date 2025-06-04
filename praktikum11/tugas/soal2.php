<h3>Soal 2 - Cetak Bilangan Genap</h3>
<form method="post">
    Cetak bilangan genap sampai: <input type="number" name="batas">
    <button type="submit">Cetak</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batas = $_POST['batas'];
    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . " ";
    }
}
?>