<?php
include 'connect.php';

$nama_paket = $_POST['nama_paket'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "INSERT INTO paket (nama_paket, jenis, harga) value ('$nama_paket', '$jenis', '$harga')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if ($result) {
    echo"<script>alert('Berhasil tambah data'); location.href='home_admin.php?pages=paket';</script>";
}else{
    echo"<script>alert('Gagal tambah data'); location.href='read_paket.php';</script>";
}
?>