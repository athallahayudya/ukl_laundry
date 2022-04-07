<?php
session_start();
include 'connect.php';

$id = $_POST['id'];
$nama_paket = $_POST['nama_paket'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query ="UPDATE paket SET nama_paket = '$nama_paket', jenis = '$jenis', harga = '$harga' WHERE id = $id";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil update data');location.href='home_admin.php?pages=paket';</script>";
}else{
    echo "<script>alert('Gagal update data');location.href='read_paket.php';</script>";
}
?>