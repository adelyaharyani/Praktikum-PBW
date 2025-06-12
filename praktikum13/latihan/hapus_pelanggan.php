<?php
include 'koneksi_db.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    mysqli_query($conn, "DELETE FROM pelanggan WHERE id = $id");
}

header('Location: pelanggan.php');
exit;
