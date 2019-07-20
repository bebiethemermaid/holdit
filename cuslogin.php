<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .dot {
            height: 300px;
            width: 300px;
            background-color: #FAF7F7;
            border-radius: 50%;
            display: inline-block;
        }
        
        .purple {
            width: 60%;
            height: 100%;
            background-color: #6e45e2;
        }
        
        .center {
            height: 100%;
            position: relative;
        }
        
        .centerlogo {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 27%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        .centercircle {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 60%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        .wel {
            top: 20%;
            font-size: 60px;
            font-family: DejaVu Sans Mono, monospace;
            right: 10%;
            text-align: center;
            position: absolute;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        .centerform {
            right: -1%;
            top: 50%;
            position: absolute;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body style="background-color:#FAF7F7">

    <div class="center">
        <p class="wel">WELCOME!</p>

        <div class="dot centercircle"></div>
        <div class="purple">
            <div class="centerform">

                <form action="#checklogin.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input style="width:370px" type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" value="Login" id="Login">Login</button>
                    </center>
                </form>
            </div>
            <img src="logo.png" class="centerlogo">
        </div>
    </div>

</body>

</html>
