<?php
session_start();

if (!isset($_SESSION["login"])) {
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
<html>

<head>
    <link rel="stylesheet" href="edit.css">
    <title>Edit Data</title>
</head>

<body class="w3-container">
    <div class="container">
        <div class="slidein-from-left">
            <div class="slidein-from-right">
                <main class="table">
                    <a href="admin.php"><button class="button1">Kembali</button></a>
                    <br><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $evn["id"]; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $gambarLama; ?>">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" class="tambah">
                                        <center>Edit</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bodtab">
                                <tr>
                                    <th>
                                        <center>GAMBAR</center>
                                    </th>
                                    <td>
                                        <img src="../img/<?= $evn["gambar"]; ?>" width="60"><br>
                                        <input type="file" name="gambar" id="gambar" accept="image/*">
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>JUDUL</center>
                                    </th>
                                    <td><input id="judul" name="nama" type="text" value="<?= $evn["nama"]; ?>"></td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>DESKRIPSI</center>
                                    </th>
                                    <td><textarea name="deskripsi" id="deskripsi" cols="90" rows="7"
                                            style="resize: none;"><?= $evn["deskripsi"]; ?></textarea></td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>TANGGAL</center>
                                    </th>
                                    <td><input type="date" name="tanggal" id="tanggal" value="<?= $evn["tanggal"]; ?>"></td>
                                </tr>

                            </tbody>
                        </table>
                        <button type="submit" name="submit" class="button2">selesai</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
</body>

</html>