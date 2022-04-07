<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah outlet</title>
</head>
<body>
    <form action="create_outlet.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama Outlet</label></td>
                <td>:</td>
                <td><input type="text" name="nama_outlet" id="nama"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id"></td>
                <td><input type="submit" value="Simpan" name="btnSimpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>