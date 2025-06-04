<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial">
    <title>Pertemuan 18</title>
</head>
<body>
<form method="get" action="proses.php">
    <?php
    $var_nama = $_GET['nama'];
    echo "SElamat datang $_GET[nama]";
    ?>
    </form>
</body>