<?php
require '../tubes/function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM sport WHERE
        nama LIKE '%$keyword%' OR 
        id_kota LIKE '%$keyword%' OR   
        tahun LIKE '%$keyword%'
        ";
$sport = query($query);

?>

<div class="row">
    <?php foreach ($sport as $spt) : ?>
<div class="col-lg-4 col-md-6 my-2  d-f;ex justify-content-around">

<div class="card" style="width: 18rem;">
  <img src="../img/<?= $spt["gambar"]; ?>" class="card-img-top" alt="...">
  <div class="card-body text-center" style="background-color:darkgrey;">
    <h5 class="card-title"><?= $spt["nama"];?></h5>
    <p><?= $spt["id_kota"]; ?></p>
    <h5><?= $spt["tahun"]; ?></h5>
    <br>
    <a href="details.php?id=<?= $spt["id"]; ?>" class="badge text-bg-dark text-decoration-none">details</a>
  </div>
</div>
</div>
<?php endforeach; ?>
  </div>
</table>