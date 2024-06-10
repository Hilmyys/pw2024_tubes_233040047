<?php 
require "function.php";

if (isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan. silahkan login');
                document.location.href = 'login.php'
            </script>";
    } else {
        echo 'user gagal ditambahkan!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <span>Registrasi</span>
            </div>

            <form action="" method="post">

                <div class="input_box">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="input-field" autofocus autocomplete="off" required>
                </div>
                <div class="input_box">
                    <label>Password</label>
                    <input type="text" name="password1" class="input-field" required>
                </div>
                <div class="input_box">
                    <label>Konfirmasi Password</label>
                    <input type="text" name="password2" class="input-field" required>
                </div>
                <div class="input_box">
                    <input type="submit" name="registrasi" value="registrasi" class="input-submit">
                </div>
                <div class="input_box">
                    <a href="login.php">Login</a>
                </div>

        </div>
    </div>
    </form>
</body> 

</html>