<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM paket WHERE id = $id";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update_paket.php" method="POST">
    <table>
            <tr>
                <td><label for="nama">Nama Paket</label></td>
                <td>:</td>
                <td><input type="text" name="nama_paket" id="nama" value="<?php echo $row['nama_paket'];?>"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td><select type="text" name="jenis" id="jenis" value="<?php echo $row['jenis'];?>">
                        <option value="-">--Pilih salah satu--</option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed cover</option>
                        <option value="kaos">Kaos</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td>:</td>
                <td><input type="text" name="harga" id="harga" value="<?php echo $row['harga'];?>"></td>
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