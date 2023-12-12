<?php
session_start();

if (!isset($_SESSION["login"])) {
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
<html>

<head>
    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Data</title>
</head>

<body class="w3-container">
    <div class="container">
        <div class="slidein-from-left">
            <div class="slidein-from-right">
                <main class="table">
                    <a href="admin.php"><button class="button1">Kembali</button></a>
                    <br><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" class="tambah">
                                        <center>TAMBAH</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bodtab">
                                <tr>
                                    <th>
                                        <center>GAMBAR</center>
                                    </th>
                                    <td><input type="file" name="gambar" id="gambar" accept="image/*"></td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>JUDUL</center>
                                    </th>
                                    <td><input id="judul" name="nama" type="text"></td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>DESKRIPSI</center>
                                    </th>
                                    <td><textarea name="deskripsi" id="deskripsi" cols="90" rows="7"
                                            style="resize: none;"></textarea></td>
                                </tr>

                                <tr>
                                    <th>
                                        <center>TANGGAL</center>
                                    </th>
                                    <td><input type="date" name="tanggal" id="tanggal"></td>
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