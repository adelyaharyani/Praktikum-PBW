<?php
include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $katasandi = $_POST['katasandi'];
    
    // Cek apakah nama sudah digunakan
    $cek = $conn->prepare("SELECT id FROM pengguna WHERE nama = ?");
    $cek->bind_param("s", $nama);
    $cek->execute();
    $cek->store_result();

if ($cek->num_rows > 0) {
    echo "<script>alert('Nama pengguna sudah terdaftar.'); window.location='register.php';</script>";
    exit;
}
$cek->close();

    // Enkripsi password
    $hash = password_hash($katasandi, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO pengguna (nama, katasandi) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $hash);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Registrasi</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="katasandi" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="katasandi" name="katasandi" required>
        </div>
        <button type="submit" class="btn btn-success">Daftar</button>
        <a href="login.php" class="btn btn-link">Sudah punya akun? Login</a>
    </form>
</div>
</body>
</html>
