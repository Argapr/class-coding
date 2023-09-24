<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    // Validasi data jika diperlukan

    // Insert data ke database
    $query = "INSERT INTO member (nama, alamat) VALUES ('$nama', '$alamat')";
    mysqli_query($conn, $query);

    // Redirect ke halaman utama
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
</head>
<body>
    <h2>Tambah Data Member</h2>

    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        <br><br>
        
        <input type="submit" value="Tambah">
    </form>
    
    <a href="index.php">Kembali ke Daftar Member</a>
</body>
</html>
