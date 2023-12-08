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
<!-- <!DOCTYPE html>
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

</html> -->

<!-- == -->

<!DOCTYPE html>s
<html>
<head>
    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Data</title>
</head>
<body>
    <main class="table">
        <!-- <section class="headtab">
            <h1><a href="">Kembali</a></h1>
        </section> -->
        <button class="button1">Kembali</button>
    <br><br>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <thead>
            <tr>
                <th colspan="2" class="tambah"><center>TAMBAH</center></th>
            </tr>
        </thead>
        <!-- <section class="bodtab"> -->
        <tbody class="bodtab">
        <tr>
            <th><center>GAMBAR</center></th>
            <td><input type="file" name="gambar" id="gambar" accept="image/*"></td>
        </tr>
        <tr>
            <th><center>JUDUL</center></th>
            <td><input id="judul" type="text"></td><!-- <textarea name="judul" id="judul" cols="30" rows=""></textarea> -->
        </tr>
        <tr>
            <th><center>DESKRIPSI</center></th>
            <td><textarea name="deskripsi" id="deskripsi" cols="90" rows="7" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <th><center>TANGGAL</center></th>
            <td><input type="date" name="tanggal" id="tanggal"></td>
        </tr>
    </tbody>
        <!-- </section> -->
        <!-- <section class="footab"> -->
            <!-- </section> -->
        </table>
    </form>
        <!-- <tfoot class="footab"> -->
            <!-- <td colspan="2" style="text-align: end; border: 0;"><h1><a href="">Selesai</a></h1></td> -->
        <!-- </tfoot> -->
        <button class="button2" type="submit" name="submit">Selesai</button>
    </main>
</body>
</html>
