<?php
include 'connect.php';

$query = "SELECT * FROM paket";

$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<html>
    <head><style media="screen">
       body{
           margin: 0px;
           padding: 10px;
           text-decoration: none;
           font-family:'Open Sans', sans-serif;
           margin:0px;
           padding:0px;
       }
       .wrapper{
           width: 1200px;
           margin: auto;
           position: relative;
       }
       .logo a{
           font-size: 35px;
           font-weight: bold;
           text-decoration: none;
           float: left;
           font-family: 'Open Sans', sans-serif;
           color: #000;
           padding: 0;
       }
       .menu{
           float: right;
       }
       nav{
           width: 100%;
           margin: auto;
           display: flex;
           line-height:60px;
           position: sticky;
           position: -webkit-sticky;
           top: 0;
           background: #7C99AC;
           border-bottom: 1px solid #b322b3;
       }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        nav ul li {
            float: left;
        }

        nav ul li a{
            color: #000;
            font-weight: bold;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
        a.tbl-biru{
            background: #FFEFEF;
            border-radius: 20px;
            margin-top: 20px;
            padding: 15px 20px 15px 20px;
            color: #000;
            cursor: pointer;
            font-weight: bold;
        }
        
    </style>
        <body>
            <h3 align="center">Paket Laudry Kita</h3>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Id</th>
                        <th>Nama Paket</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($num > 0){
                        $no = 1;
                        while($data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $data['id'] . "</td>";
                            echo "<td>" . $data['nama_paket'] . "</td>";
                            echo "<td>" . $data['jenis'] . "</td>";
                            echo "<td>" . $data['harga'] . "</td>";
                            echo "<td><a href='form_update-paket.php?id=" . $data['id'] . "'>Edit</a>";
                            echo "<td><a href='delete_paket.php?id=" . $data['id'] . "' onClick='return confirm (\"Apakah Anda yakin ingin menghapus data ini ?\")'>Delete</a></td>";
                            $no++;
                        }
                    }else{
                            echo "<td colspan='5'>Tidak ada data</td>";
                        }
                        ?>
                </tbody>
            </table>
            <br>
            <button><a href="form_create-paket.php">Tambah</a></button>
        </body>
    </head>
</html>