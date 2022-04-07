<?php
session_start();
?>

<html>
    <head>
        <title>Uji coba</title>
    </head>
    <style media="screen">
        
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
        <nav>
            <div class="wrapper">
                <div class="logo"><a href="">Laundry Kita</a></div>
            <div class="menu">
                <ul>
                <li><a href="?pages=home">Home</a></li>
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
                        include "humi_user.php";
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