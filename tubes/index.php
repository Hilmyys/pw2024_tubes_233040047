<?php
session_start();

if(!isset($_SESSION['login'])){
  header( "Location: login.php ");
  exit;
}
require 'function.php';
$sport = query("SELECT * FROM sport");

//tombol cari diklik
if(isset($_POST["cari"]) ) {
  $sport = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sport</title>
</head>

<body>
  <div class="container">
    <a href="logout.php" class="btn btn-secondry">Logout</a>
    <h1>Stadion Indonesia</h1>
    <a href="tambah.php" class="btn btn-dark">Tambah Data</a>
    <br><br>
    <form action="" method="post" class="d-flex" role="search">
      <input class="form-control me-2" type="text" name="keyword" autofocus placeholder="Search" autocomplete="off">
      <button class="btn btn-outline-dark" type="submit" name="cari">Search</button>
    </form>
    <br>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Stadion</th>
          <th scope="col">Gambar</th>
          <th scope="col">Kota</th>
          <th scope="col">Tahun Didirikan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i= 1; ?>
        <?php foreach ($sport as $spt) : ?>
          <tr>
            <th scope="row"><?= $i;?></th>
            <td><?= $spt['nama']; ?></td> 
            <td><img src="../img/<?= $spt["gambar"]; ?>" width="150"></td>
            <td><?= $spt['kota']; ?></td>
            <td><?= $spt['tahun']; ?></td>
            <td>
              <a href="edit.php?id=<?= $spt["id"]; ?>" class="badge text-bg-secondary text-decoration-none">Edit</a>
              <a href="delete.php?id=<?= $spt["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
            </td>
          </tr>  
          <?php $i++?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>