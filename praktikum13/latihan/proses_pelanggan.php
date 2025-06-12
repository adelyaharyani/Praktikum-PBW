<?php
include 'koneksi_db.php';

if (isset($_POST['tambah'])) {
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];

    mysqli_query($conn, "INSERT INTO pelanggan (id, nama, email, alamat, telepon) VALUES ('$id', '$nama', '$email', '$alamat', '$telepon')");
    header('Location: pelanggan.php');
    exit;
}

if (isset($_POST['edit'])) {
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];

    mysqli_query($conn, "UPDATE pelanggan SET nama='$nama', email='$email', telepon='$telepon' WHERE id=$id");
    header('Location: pelanggan.php');
    exit;
}

header('Location: pelanggan.php');
