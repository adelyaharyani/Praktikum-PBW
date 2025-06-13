<?php
session_start();
if (!isset($_SESSION['pengguna_id'])) {
    // Belum login, arahkan ke login
    header("Location: login.php");
    exit;
}
?>
