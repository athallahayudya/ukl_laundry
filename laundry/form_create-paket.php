<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>
</head>
<body>
    <form action="create_paket.php" method="POST">
    <table>
            <tr>
                <td><label for="nama">Nama Paket</label></td>
                <td>:</td>
                <td><input type="text" name="nama_paket" id="nama"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td><select type="text" name="jenis" id="jenis">
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
                <td><input type="text" name="harga" id="harga"></td>
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