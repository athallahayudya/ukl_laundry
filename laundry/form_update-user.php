<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM user JOIN member on user.id = member.id WHERE user.id = $id";

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
    <form action="update_user.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?php echo $row['nama'];?>"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username" value="<?php echo $row['username'];?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="text" name="password" id="password" value="<?php echo $row['password'];?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>"></td>
            </tr>
            <tr>
                <td><label for="telepon">No. Telepon</label></td>
                <td>:</td>
                <td><input type="text" name="telepon" id="telepon" value="<?php echo $row['telepon'];?>"></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                <td>:</td>
                <td><select type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>">
                            <option value="-">--Pilih salah satu--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                    </select>
            </td>
            </tr>
            <tr>
                <td><label for="role">Role</label></td>
                <td>:</td>
                <td><select type="text" name="role" id="role" value="<?php echo $row['role'];?>">
                                <option value="-">--Pilih salah satu--</option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="member">Member</option>
                        </select>
                </td>
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