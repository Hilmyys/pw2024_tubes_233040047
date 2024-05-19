<?php
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040047');

function query($query) {
    global $conn;
 $result = mysqli_query($conn, $query);
 $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    // upload gambar
    $gambar = upload();
    if(!$gambar)  {
        return false;
    }

    $kota = htmlspecialchars($data["kota"]);
    $tahun = htmlspecialchars($data["tahun"]);

    $query = "INSERT INTO sport VALUES
            (NULL, '$nama', '$gambar', '$kota', '$tahun')
            ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4) {
        echo "
        <script>
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.' ,$namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
        <script>
            alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    if( $ukuranfile > 1000000 ) {
        echo "
        <script>
            alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namafileBaru);

    return $namafile;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sport WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $kota = htmlspecialchars($data["kota"]);
    $tahun = htmlspecialchars($data["tahun"]);

    $query = "UPDATE sport SET
            nama = '$nama',
            gambar = '$gambar',
            kota = '$kota',
            tahun = '$tahun'
            WHERE id  = $id
            ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM sport WHERE
        nama LIKE '%$keyword%' OR 
        kota LIKE '%$keyword%' OR 
        tahun LIKE '%$keyword%'
    "; 
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    mysqli_query($conn, "SELECT username FROM user
            WHERE username = '$password'"); 

    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }


    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    // enkripsi pw
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkna userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>