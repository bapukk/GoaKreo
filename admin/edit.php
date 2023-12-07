<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
}

require '../function.php';

//mengambil value id
$id = $_GET["id"];

$gambarLama = $_GET["gambar"];

//ambil query dari event
$evn = query("SELECT * FROM event WHERE ID = $id")[0];

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    //cek apakah data  berhasil ditubah
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diedit');
            document.location.href = 'admin.php';
        </script>
        ";         
    } else { 
        echo "
        <script>
            alert('data gagal diedit');
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
    <title>edit</title>
</head>

<body>
    <h1>INI HALAMAN EDIT</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $evn["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $gambarLama; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="../img/<?= $evn["gambar"]; ?>" width="60"><br>
                <input type="file" id="gambar" name="gambar" accept="image/*">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" autocomplete="off" value="<?= $evn["nama"]; ?>">
            </li>
            <li>
                <label for="deskripsi">Deskripsi : </label>
                <input type="text" id="deskripsi" name="deskripsi" autocomplete="off" value="<?= $evn["deskripsi"]; ?>">
            </li>
            <li>
                <label for="tanggal">Tanggal : </label>
                <input type="text" id="tanggal" name="tanggal" autocomplete="off" value="<?= $evn["tanggal"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">edit Data</button>
            </li>
        </ul>
    </form>
</body>

</html>