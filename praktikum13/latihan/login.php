<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
   <h2> Masuk kedalam sistem</h2>
   <?php if (isset($_GET['message'])): ?>
       <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
   <?php endif; ?>
   <form method="post" action="proses_login.php">
       <div class="mb-3">
           <label>Nama pengguna :</label>
           <input type="text" name="nama" class="form-control" required>
       </div>
       <div class="mb-3">
           <label>Kata sandi :</label>
           <input type="password" name="katasandi" class="form-control" required>
       </div>
       <button type="submit" class="btn btn-primary">Login</button>
       <p class="mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
   </form>
</body>
</html>
