<?php
include 'connect.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$role = $_POST['role'];

$result1 =  mysqli_query($connect, "INSERT INTO user (nama, username, password, role) VALUES ('$nama', '$username', '$password','$role')");
$result2 = mysqli_query($connect, "INSERT INTO member (nama, alamat, telepon, jenis_kelamin) VALUES ('$nama', '$alamat', '$telepon', '$jenis_kelamin')");
$num = mysqli_affected_rows($connect);

if ($num) {
    echo"<script>alert('Berhasil tambah data'); location.href='home_admin.php?pages=user';</script>";
}else{
    echo"<script>alert('Gagal tambah data'); location.href='read_paket.php';</script>";
}
?>