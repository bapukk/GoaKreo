<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
}

include '../function.php';
$events = query("SELECT * FROM event");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>dashboarad</title>
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="title" id="title">
                <h1>EVENT</h1>
            </div>
        </div>
            <div class="logout">
                <a href="logout.php"><button class="button">Logout</button></a>
            </div>
            <div class="tambah">
                <a href="tambah.php"><button class="button2">Tambah</button></a>
            </div>
        <div class="tabel">
            <table style="overflow-x:auto;">
                <tr>
                    <th>NO</th>
                    <th>GAMBAR</th>
                    <th>NAMA</th>
                    <th>DESKRIPSI</th>
                    <th>TANGGAL</th>
                    <th colspan="2"></th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach( $events as $event ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="../img/<?= $event["gambar"]; ?>" alt="" id="gambar" width="90"></td>
                    <td><?= $event["nama"]; ?></td>
                    <td><?= $event ["deskripsi"]; ?></td>
                    <td><?= date('d/m/Y', strtotime($event["tanggal"])); ?></td>
                    <td><a href="edit.php?id=<?= $event["id"]; ?> & gambar=<?= $event['gambar']; ?>"><button class="button3">edit</button></a></td>
                    <td><a href="hapus.php" onclick="return confirm('Apakan anda yakin?')"><button class="button4">delete</button></a></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>  
            </table>
        </div>
    </div>

</body>

</html>