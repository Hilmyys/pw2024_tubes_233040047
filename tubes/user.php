<?php 
require 'function.php';
// pagination
// konfigurasi

// $jumlahDataPerHalaman = 2;
// $jumlahData = count(query("SELECT * FROM sport"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
// // halaman = 2, awalData = 4
// // halaman = 3, awalData = 4 


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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/font.css">
  <title>Halaman Utaman</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sport</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <form action="" method="post" class="d-flex" role="search">
            <input class="form-control me-2 from-cari" type="text" name="keyword" autofocus placeholder="Search" autocomplete="off" id="keyword">
            <button class="btn btn-outline-dark" type="submit" name="cari" id="tombol-cari">Search</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>
<div class="bg-dark-subtle">
  <div class="container">
  <section id="home">
  <br><br><br><br>
    <center><h1>STADION  INDONESIA</h1></center><br><br>
    <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card" style="width: 18rem;">
    <img src="../img/gbk.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Stadion Gelora Bung Karno</h5>
        <a href="gbk.php" class="btn btn-outline-dark">Detail</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card" style="width: 18rem;">
    <img src="../img/sriwijaya.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">	Stadion Gelora Sriwijaya Jakabaring</h5>
        <a href="sriwijaya.php" class="btn btn-outline-dark">Detail</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 row-3">
    <div class="card" style="width: 18rem;">
    <img src="../img/gbla.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">	Stadion Gelora Bandung lautan Api</h5>
        <a href="gbla.php" class="btn btn-outline-dark">Detail</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 row-3">
    <div class="card" style="width: 18rem;">
    <img src="../img/manahan.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">	Stadion Manahan</h5>
        <a href="manahan.php" class="btn btn-outline-dark">Detail</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 row-3">
    <div class="card" style="width: 18rem;">
    <img src="../img/bali.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">	Stadion Kapten I Wayan Dipta	</h5>
        <a href="manahan.php" class="btn btn-outline-dark">Detail</a>
      </div>
    </div>
  </div>
</div>
</section>
</div>
</body>
<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>