<?php
include 'functions.php';

// Ambil ID anggota yang akan dihapus dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data anggota berdasarkan ID
    $query = "DELETE FROM member WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirect ke halaman utama setelah penghapusan data
    header("Location: index.php");
    exit();
}
else {
    die("ID anggota tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Member</title>
</head>
<body>
    <h2>Hapus Data Member</h2>
    
    <p>Apakah Anda yakin ingin menghapus anggota ini?</p>
    
    <a href="index.php">Batal</a>
    <a href="delete.php?id=<?= $id ?>&confirm=true">Hapus</a>
</body>
</html>
