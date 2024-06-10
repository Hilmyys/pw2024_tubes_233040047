
<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'function.php';

if (isset($_POST["login"])) {
    $login = login($_POST);
}

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
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font.css">

    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#sport">SPORT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#login" class="btn btn-outline-dark ">Login</a>
          </li>
        </ul>
        <form action="" method="post" class="d-flex" role="search">
          <input class="form-control me-2 from-cari" type="text" name="keyword" autofocus placeholder="Search" autocomplete="off" id="keyword">
          <button class="btn btn-outline-dark" type="submit" name="cari" id="tombol-cari">Search</button>
        </form>
      </div>
    </div>
  </nav>
 <br><br> 
  <!-- isi -->
  <section id= "sport">
  <div id="container" class="container">   
    <center><h1>Stadion Indonesia</h1></center>
    <br>

<div class="row">
    <?php foreach ($sport as $spt) : ?>
<div class="col-lg-4 col-md-6 my-2  d-f;ex justify-content-around">

<div class="card" style="width: 18rem;">
  <img src="../img/<?= $spt["gambar"]; ?>" class="card-img-top" alt="...">
  <div class="card-body text-center" style="background-color:darkgrey;">
    <h5 class="card-title"><?= $spt["nama"];?></h5>
    <br>
    <a href="details.php?id=<?= $spt["id"]; ?>" class="badge text-bg-dark text-decoration-none">details</a>
  </div>
</div>
</div>
<?php endforeach; ?>
  </div>
  </section>


  <!-- login -->
  <br><br><br><br><br><br><br>
    <section id="login">
    <div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <?php if (isset($login['error'])) : ?>
                    <p><?= $login['pesan']; ?></p>
                <?php endif; ?>
                <span>Login</span>
            </div>

            <form action="" method="post">
                <div class="input_box">
                    <input type="text" id="username" name="username" class="input-field">
                    <label for="username" autofocus autocomplete="off" required>Username</label>
                </div>
                <div class="input_box">
                    <input type="text" id="password" name="password" class="input-field">
                    <label for="password" autofocus autocomplete="off" required>Password</label>
                </div>
                <div class="input_box">
                    <input type="submit" name="login" value="login" class="input-submit">
                </div>
                <div class="input_box">
                    <a href="registrasi.php">Registrasi</a>
                </div>
        </div>
    </div>
    </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/user.js"></script>
</html>
