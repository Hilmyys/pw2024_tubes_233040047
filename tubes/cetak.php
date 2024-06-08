<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php ");
  exit;
}
require 'function.php';


$sport = query("SELECT * FROM sport");

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sport</title>
  <link rel="stylesheet" href="../css/font.css">
</head>

<body>
    <h1>Stadion Indonesia</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Stadion</th>
          <th scope="col">Gambar</th>
          <th scope="col">Kota</th>
          <th scope="col">Tahun Didirikan</th>
        </tr>';
    
        $i = 1;
        foreach ( $sport as $spt) {
          $html .= '<tr>
          <td> '. $i++ .'</td>
          <td>'.$spt["nama"].'</td>
            <td><img src="../img/'.$spt["gambar"].'" width="150"></td>
            <td>'.$spt['id_kota'].'</td>
            <td>'.$spt['tahun'].'</td>
          </tr>';
        }

        $html .= '</table>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('Stadion.pdf',\Mpdf\Output\Destination::INLINE);
?>