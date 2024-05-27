<?php
session_start();

if(!isset($_SESSION['login'])){
  header( "Location: login.php ");
  exit;
}

require 'function.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        "; 
    } else {
        echo "  
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-8">
        <h1>Tambah Data Stadion</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" require>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">kota</label>
                <input type="text" class="form-control" id="kota" name="kota">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">tahun didirikan</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
            <button type="submit" name="submit" class="btn btn-dark">Tambah</button>
        </form>
</body>

</html>