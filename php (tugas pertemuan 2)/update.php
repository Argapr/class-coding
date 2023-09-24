<?php
include 'functions.php';

// Ambil ID anggota yang akan diedit dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM member WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    // Ambil data anggota dari hasil query
    $row = mysqli_fetch_assoc($result);

    // Jika data anggota tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan Anda, misalnya, mengarahkan kembali ke halaman index.php.
}
else {
    die("ID anggota tidak ditemukan.");
}

// ...
// Ambil ID anggota yang akan diedit dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Tambahkan baris berikut untuk memastikan ID anggota tersedia
    echo "ID anggota yang akan diedit: " . $id;
    // ...
}
// ...


// Proses pembaruan data jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    // Validasi data jika diperlukan

    // Query untuk memperbarui data anggota berdasarkan ID
    $query = "UPDATE member SET nama = '$nama', alamat = '$alamat' WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirect ke halaman utama setelah pembaruan data
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h2>Edit Data Member</h2>

    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>" required>
        <br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="<?= $row['alamat'] ?>" required>
        <br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>

    <a href="index.php">Kembali ke Daftar Member</a>
</body>
</html>
