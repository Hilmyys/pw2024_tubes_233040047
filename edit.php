<?php
require 'function.php';
// ambil data url
$id = $_GET["id"];

// query data sport
$spt = query("SELECT * FROM sport WHERE id = $id")[0];


if (isset($_POST["submit"])) {

    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diedit!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "  
        <script>
            alert('data gagal diedit!');
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
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-8">
        <h1>Edit Data Stadion</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $spt["nama"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $spt["gambar"]; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" require value="<?= $spt["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label><br>
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $spt["gambar"]; ?>">
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">kota</label>
                <input type="text" class="form-control" id="kota" name="kota" value="<?= $spt["kota"]; ?>">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">tahun didirikan</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $spt["tahun"]; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">edit</button>
        </form>
</body>
</html>