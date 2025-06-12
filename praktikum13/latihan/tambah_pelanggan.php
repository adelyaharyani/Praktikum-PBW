<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Pelanggan</h2>
    <form action="proses_pelanggan.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">ID</label>
            <input type="text" class="form-control" id="nama" name="ID" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="Nama" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="Email" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="Telepon" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="nama" name="Alamat" required>
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
        <a href="pelanggan.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
