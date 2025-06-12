<?php
include 'koneksi_db.php';

// Ambil ID dari URL
$id = $_GET['id'] ?? 0;

// Jika form disubmit (POST), lakukan update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $update = mysqli_query($conn, "UPDATE pelanggan SET 
        Nama='$nama', 
        Alamat='$alamat', 
        Email='$email', 
        Telepon='$telepon' 
        WHERE ID=$id");

    if ($update) {
        header("Location: pelanggan.php"); // Redirect ke daftar pelanggan
        exit;
    } else {
        echo "Gagal mengupdate: " . mysqli_error($conn);
    }
}

// Ambil data untuk ditampilkan di form
$query = mysqli_query($conn, "SELECT * FROM pelanggan WHERE ID = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Pelanggan</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($data['Nama']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($data['Alamat']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($data['Email']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= htmlspecialchars($data['Telepon']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="pelanggan.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
