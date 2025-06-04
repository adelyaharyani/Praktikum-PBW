<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Praktikum PHP Interaktif</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Latihan Praktikum</h2>
    <ul>
        <li><a href="?page=soal1" <?php if(isset($_GET['page']) && $_GET['page']=='soal1') echo 'class="active"'; ?>>Soal 1</a></li>
        <li><a href="?page=soal2" <?php if(isset($_GET['page']) && $_GET['page']=='soal2') echo 'class="active"'; ?>>Soal 2</a></li>
        <li><a href="?page=soal3" <?php if(isset($_GET['page']) && $_GET['page']=='soal3') echo 'class="active"'; ?>>Soal 3</a></li>
        <li><a href="?page=soal4" <?php if(isset($_GET['page']) && $_GET['page']=='soal4') echo 'class="active"'; ?>>Soal 4</a></li>
        <li><a href="?page=reset">Reset</a></li>
    </ul>

    <hr>

    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] == "reset") {
            session_destroy();
            header("Location: index.php");
        } else {
            include $_GET['page'] . ".php";
        }
    } else {
        echo "<p>Selamat datang di Latihan Praktikum! Silakan pilih soal dari menu di atas.</p>";
    }
    ?>
</div>
</body>
</html>
