<?php
$conn = mysqli_connect("localhost", "root", "", "goakreo");

//query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    $query = "INSERT INTO event
    VALUES
    ('','$gambar','$nama','$deskripsi','$tanggal'
    )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    //cek apabila gambar tidak diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah data yang diupload adalah gambar
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>
            alert('YANG ANDA UPLOAD BUKAN GAMBAR');
         </script>";
        return false;
    }

    //cek ukuran
    if ($ukuranFile > 1000000) {
        echo "<script>
         alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    //lolos
    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}



function hapus($query)
{
    global $conn;
    $file = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM event WHERE id='$query'"));
    unlink('../img/' . $file['gambar']);
    $hapus = "DELETE FROM event WHERE id='$query'";
    mysqli_query($conn, $hapus);
    return mysqli_affected_rows($conn);
}


function edit($data)
{
    global $conn;
    $id = $data["id"];
    $gambarLama = $data["gambarLama"];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
        if ($gambar === false) {
            $gambar = $gambarLama;
        } else if (!unlink('../img/' . $gambarLama)) {
            echo "<script>
                    alert('gambar gagal dihapus!');
                </script>";
            return false;
        }
    }


    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    $query = "UPDATE event SET
    gambar = '$gambar',
    nama = '$nama', 
    deskripsi = '$deskripsi',
    tanggal = '$tanggal'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
            return false;
    }


    //cek komfirmasi pw
    if ($password !== $password2) {
        echo "<script>
                    alert('konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);
}
?>