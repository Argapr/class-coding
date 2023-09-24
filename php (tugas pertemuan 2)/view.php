<?php
include 'functions.php';

// Ambil ID anggota yang dipilih dari URL
$id = $_GET['id'];

// Query database untuk mengambil informasi anggota berdasarkan ID
$query = "SELECT * FROM member WHERE id = $id";
$member = query($query);

if (empty($member)) {
    die("Anggota tidak ditemukan.");
}

$member = $member[0]; // Karena hasil query menghasilkan array, kita ambil elemen pertama

// Tampilkan informasi anggota
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>
</head>
<body>
    <h1>Detail Anggota</h1>
    <p>ID: <?= $member['id'] ?></p>
    <p>Nama: <?= $member['nama'] ?></p>
    <p>Alamat: <?= $member['alamat'] ?></p>
</body>
</html>
