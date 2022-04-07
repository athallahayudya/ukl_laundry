<?php
session_start();
?>

<html>
    <head>
        <title>Uji coba</title>
    </head>
    <style media="screen">
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
        div.badan{
        background-color: white;
        border-radius: 8px;
        margin-bottom: 10px;
        }
        
    </style>
    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href="">Laundry Kita</a></div>
            <div class="menu">
                <ul>
                <li><a href="?pages=home">Home</a></li>
                <li><a href="?pages=user">User</a></li>
                <li><a href="?pages=outlet">Outlet</a></li>
                <li><a href="?pages=paket">Paket</a></li>
                <li><a href="logout.php" class="tbl-biru">Logout</a></li>
            </ul>
            </div>
        </div>
        </nav>
        <div class="content">
            <?php
            $page=(isset($_GET['pages']))?$_GET['pages']:"home";
                switch ($page){
                    case 'home':
                        include "humi_admin.php";
                        break;
                    case 'user' :
                        include "read_user.php";
                        break;
                    case 'outlet':
                        include "read_outlet.php";
                        break;
                    case 'paket':
                        include "read_paket.php";
                        break;
                    default :
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
                }
            
            ?>
        </div>
           <footer>
               <h6 align="left">© 2022 athallahayudya</h6> 
           </footer>
        </div>
    </body>
</html>