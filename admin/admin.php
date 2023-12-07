<?php
include '../function.php';
$event = query("SELECT * FROM event");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="#">+</a></li>
        <li><a href="#">ADMIN</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
      
    </nav>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        <?php foreach ($event as $evn): ?>
          <tr>
            <td>
              <?= $i ?>
            </td>
            <td><img src="../img/<?= $evn["gambar"]; ?>" alt="Gambar 1" width="60"></td>
            <td>
              <?= $evn["nama"]; ?>
            </td>
            <td>
              <?= $evn["deskripsi"]; ?>
            </td>
            <td>
              <?= $evn["tanggal"]; ?>
            </td>
            <td><button>Edit</button> <button>Delete</button></td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>

</html>