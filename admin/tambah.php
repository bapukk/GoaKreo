<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
}

require '../function.php';

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {


    //cek apakah data  berhasil ditambah 
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>

<body>
    <h1>INI HALAMAN TAMBAH</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar">Gambar : </label><br>
                <input type="file" id="gambar" name="gambar" accept="image/*">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" autocomplete="off">
            </li>
            <li>
                <label for="deskripsi">Deskripsi : </label>
                <input type="text" id="deskripsi" name="deskripsi" autocomplete="off">
            </li>
            <li>
                <label for="tanggal">Tanggal : </label>
                <input type="text" id="tanggal" name="tanggal" autocomplete="off" value="yyyy-mm-dd">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>