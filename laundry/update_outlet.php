<?php
session_start();
include 'connect.php';

$id = $_POST['id'];
$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];

$query ="UPDATE outlet SET nama_outlet = '$nama_outlet', alamat = '$alamat' WHERE id = $id";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil update data');location.href='home_admin.php?pages=outlet';</script>";
}else{
    echo "<script>alert('Gagal update data');location.href='read_outlet.php';</script>";
}
?>