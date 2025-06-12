<?php
include 'koneksi_db.php'; 

$data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Daftar Pelanggan</title>
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container mt-4">
   <div class="d-flex justify-content-between align-items-center mb-3">
       <h2>Daftar Pelanggan</h2>
       <a href="tambah_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a>
   </div>

   <table class="table table-bordered table-striped">
       <thead>
           <tr>
               <th>ID</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Email</th>
               <th>Telepon</th>
               <th>Aksi</th> <!-- TAMBAH KOLOM INI -->
           </tr>
       </thead>
       <tbody>
           <?php while ($row = mysqli_fetch_assoc($data_pelanggan)) : ?>
               <tr>
                   <td><?= htmlspecialchars($row['ID']) ?></td>
                   <td><?= htmlspecialchars($row['Nama']) ?></td>
                   <td><?= htmlspecialchars($row['Alamat']) ?></td>
                   <td><?= htmlspecialchars($row['Email']) ?></td>
                   <td><?= htmlspecialchars($row['Telepon']) ?></td>
                   <td>
                       <a href="edit_pelanggan.php?id=<?= $row['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                       <a href="hapus_pelanggan.php?id=<?= $row['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                   </td>
               </tr>
           <?php endwhile; ?>
       </tbody>
   </table>
</div>
</body>
</html>
