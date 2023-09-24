<?php 
include 'functions.php';
$member = query("SELECT * FROM member")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>
<body>

<a href="tambah.php" class="btn-primary">tambah data member</a>
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0" class="text-center">
        <tr>
    	    <th>No</th>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>Action</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $member as $row ) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["alamat"] ?></td>
            <td>
                <a href="./view.php?id=<?= $row["id"] ?>">View</a>
            </td>
            <td><a href="./update.php">edit</a> | <a href="./delete.php">hapus</a></td>
        </tr>
        <?php endforeach; ?>

    </table>
    
</body>
</html>