<html>
    <head>
        <title>Uji Coba Login</title>
    </head>
    <style>
        *{
            box-sizing:border-box;
        }
        [class*="col-"]{
            padding: 15px;
            float: left;
            width: 100%;
        }

        @media only screen and (min-widt: 768px){
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}
        }

        .container{
            width:50%;
            margin:0 auto;

        }

        .bgcolor{ background-color: #D3DEDC;}
        .form-control{
            padding: 20px;
            font-size: 15px;
            width: 100%;
            height: 30px;
            border: 1px solid grey;
            border-radius: 10px;
        }
        .button{
            float: right;
            background: green;
            color: #fff; 
            padding: 10px;
            border: 1px solid green;
            width: 75px;
            height: 40px;
            border-radius: 10px;
            font-weight: bolder;
            letter-spacing: 1px; 
        }
        fieldset{
            margin-top: 50px;
            border: 1px solid #7C99AC;
            border-radius: 10px;
            background: #7C99AC;

        }
        
    </style>
    <body class="bgcolor">
        <div>
        <div class="container">
        <form action="login-proses.php" method="POST">
            
            <fieldset>
                <h2 align= center>Welcome to Laundry Kita</h2>
                <div class="col-12">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="col-12">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="col-3">
                    <button type="submit" name="login" class="button">Login</button>
                </div>
            </fieldset>
        
        </form>
        </div>
    </body>
</html>
