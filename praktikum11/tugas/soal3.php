<h3>Soal 3 - Daftar Nama Hewan</h3>
<form method="post">
    Tambahkan Nama Hewan: 
    <input type="text" name="hewan">
    <button type="submit" name="tambah">Tambah</button>
</form>

<?php
if (!isset($_SESSION['hewan'])) {
    $_SESSION['hewan'] = ['Kucing', 'Anjing', 'Kelinci'];
}

if (isset($_POST['tambah'])) {
    $nama = $_POST['hewan'];
    if ($nama != "") {
        $_SESSION['hewan'][] = $nama;
    }
}

foreach ($_SESSION['hewan'] as $h) {
    echo "$h &nbsp;&nbsp;";
}
?>
