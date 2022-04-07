<?php
include 'connect.php';

$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO outlet (nama_outlet, alamat) values ('$nama_outlet', '$alamat')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo "<script>alert('Berhasil tambah data'); location.href='home_admin.php?pages=outlet';</script>";
}else{
    echo "<script>alert('Gagal tambah data'); location.href='read_outlet.php';</script>";
}
?>