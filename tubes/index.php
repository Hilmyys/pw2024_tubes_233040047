<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php ");
  exit;
}
require 'function.php';


$sport = query("SELECT * FROM sport");
// $awalData, $jumlahDataPerHalaman


//tombol cari diklik
if (isset($_POST["cari"])) {
  $sport = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sport</title>
  <link rel="stylesheet" href="../css/font.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SPORT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="logout.php" class="btn btn-outline-dark logout">Logout</a>
          </li>
        </ul>
        <form action="" method="post" class="d-flex" role="search">
          <input class="form-control me-2 from-cari" type="text" name="keyword" autofocus placeholder="Search" autocomplete="off" id="keyword">
          <button class="btn btn-outline-dark" type="submit" name="cari" id="tombol-cari">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="container" >   
    <h1>Stadion Indonesia</h1>
    <a href="tambah.php" class="btn btn-dark tambah" role="button">Tambah Data</a> <a href="cetak.php" class="btn btn-dark tambah" targer="_blank" >Cetak</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Stadion</th>
          <th scope="col">Gambar</th>
          <th scope="col">Kota</th>
          <th scope="col">Tahun Didirikan</th>
          <th scope="col">Details</th>
          <th scope="col" class="aksi">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($sport as $spt) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $spt['nama']; ?></td>
            <td><img src="../img/<?= $spt["gambar"]; ?>" width="150"></td>
            <td><?= $spt['id_kota']; ?></td>
            <td><?= $spt['tahun']; ?></td>
            <td class="aksi">
              <a href="details.php?id=<?= $spt["id"]; ?>" class="badge text-bg-dark text-decoration-none">details</a>
            </td>
            <td class="aksi">
              <a href="edit.php?id=<?= $spt["id"]; ?>" class="badge text-bg-secondary text-decoration-none">Edit</a>
              <a href="delete.php?id=<?= $spt["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
            </td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </body>
<script src="../js/script.js"></script>
</html>