<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "
        <script>
            alert('user baru berhasil ditambahkan)
        </script>";
    } else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <center>
        <h1>Registrasi</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="passowrd">passowrd :</label>
                    <input type="password" name="passowrd" id="passowrd">
                </li>
                <li>
                    <label for="passowrd">konfirmasi password :</label>
                    <input type="password" name="passowrd" id="passowrd">
                </li>
                <li>
                    <button type="submit" name="register">Register!</button>
                </li>
            </ul>
        </form>
    </center>
</body>

</html>