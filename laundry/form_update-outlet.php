<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM outlet WHERE id = $id";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
</head>
<body>
    <form action="update_outlet.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama Outlet</label></td>
                <td>:</td>
                <td><input type="text" name="nama_outlet" id="nama" value="<?php echo $row['nama_outlet'];?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                <td><input type="submit" value="Simpan" name="btnSimpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>