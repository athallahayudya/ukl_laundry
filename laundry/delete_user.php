<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = $id";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil hapus data'); location.href= 'home_admin.php?pages=user';</script>";
}else{
    echo "<script>alert('Gagal hapus data'); location.href= 'home_admin.php?pages=user';</script>";
}
?>