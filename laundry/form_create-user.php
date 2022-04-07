<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>akunuku</title>
</head>
<style>
    *{box-sizing: border-box;}
    [class*="col-"]{
        padding: 10px;
        float: left;
        width: 100%;
    }
    @media only screen and (min-width: 768px){
        /untuk dekstop/
        .col-1{width: 8.33%;}
        .col-2{width: 16.66%;}
        .col-3{width: 25%;}
        .col-4{width: 33.33%;}
        .col-5{width: 41.66%;}
        .col-6{width: 50%;}
        .col-7{width: 58.33%;}
        .col-8{width: 66.66%;}
        .col-9{width: 75%;}
        .col-10{width: 83.33%;}
        .col-11{width: 91.66%;}
        .col-12{width: 100%;}
    }
    .bg {
        background: linear-gradient(to right, #3798ed, #1387ed, #5daef5, #1f80ff, #4d9aff);
    }
    .container{
        width: 90%;
        margin: 10px auto;
    }
    header{
        background-color: white;
        padding: 5px auto;
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    header h1.judul{
        text-align: center;
        font-family: monospace;
    }
    fieldset{
        background-color: white;
        padding: 5px auto;
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .label{
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    .form-control{
        padding: 20px;
        font-size: 15px;
        width: 100%;
        height: 25px;
        border: 2px solid black;
        border-radius: 10px;
    }
    select{
        padding: 5px;
        font-size: 15px;
        width: 100%;
        height: 45px;
        border: 2px solid black;
        border-radius: 10px;
    }
    label{
        font-size: 18px;
        font-weight: bold;
        margin-right: 20px;
    }
    .btn{
        float: right;
    }
    button{
        background: green;
        color: #fff;
        padding: 10px;
        border: 1px solid green;
        width: 100%;
        height: 40px;
        border-radius: 10px;
        font-weight: bolder;
        letter-spacing: 1px;
    }
</style>
    <body >
        <form action="create_user.php" method="POST">
         <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="text" name="password" id="password"></td>
            </tr><tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td><label for="telepon">No. Telepon</label></td>
                <td>:</td>
                <td><input type="text" name="telepon" id="telepon"></td>
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
                <td><input type="hidden" name="id"></td>
                <td><input type="submit" value="Simpan" name="btnSimpan"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>