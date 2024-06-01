<?php
require '../tubes/function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM sport WHERE
        nama LIKE '%$keyword%' OR 
        kota LIKE '%$keyword%' OR   
        tahun LIKE '%$keyword%'
        ";
$sport = query($query);

?>
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
        <?php $i = 1; ?>
        <?php foreach ($sport as $spt) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $spt['nama']; ?></td>
                <td><img src="../img/<?= $spt["gambar"]; ?>" width="150"></td>
                <td><?= $spt['kota']; ?></td>
                <td><?= $spt['tahun']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $spt["id"]; ?>" class="badge text-bg-secondary text-decoration-none">Edit</a>
                    <a href="delete.php?id=<?= $spt["id"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </tbody>
</table>