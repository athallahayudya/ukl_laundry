<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


    
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $data = mysqli_fetch_array($result);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $data['role'];
       if($data['role'] == 'admin'){
            header("location:home_admin.php");
        }elseif($data['role'] == 'kasir'){
            header("location:home_kasir.php");
        }else{
            header("location:home_user.php");
            
        }
    }else{
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi !'); history.go(-1);</script>";
    }
    
