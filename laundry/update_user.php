<?php
session_start();
include 'connect.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$role = $_POST['role'];

$result1 =  mysqli_query($connect, "UPDATE user SET nama = '$nama', username = '$username', password = '$password', role = '$role'  WHERE id = $id");
$result2 = mysqli_query($connect, "UPDATE member SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', jenis_kelamin = '$jenis_kelamin' WHERE id = $id");
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil update data');location.href='home_admin.php?pages=user';</script>";
}else{
    echo "<script>alert('Gagal update data');history.go(-1);</script>";
}
?>