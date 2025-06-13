<?php
session_start();
include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama']) && isset($_POST['katasandi'])) {
    $nama = $_POST['nama'];
    $katasandi = $_POST['katasandi'];

    $stmt = $conn->prepare("SELECT * FROM pengguna WHERE nama = ?");
    $stmt->bind_param("s", $nama);
    $stmt->execute();
    $result = $stmt->get_result();
    $pengguna = $result->fetch_assoc();

    if ($pengguna && password_verify($katasandi, $pengguna['katasandi'])) {
    $_SESSION['login_Un51k4'] = $pengguna['nama']; // <--- PENTING
    header("Location: index.php");
    exit;
    } else {
        echo "<script>alert('Nama atau kata sandi salah!'); window.location='login.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    // Jika akses langsung tanpa POST, kembali ke login
    header("Location: login.php");
    exit;
}
?>
