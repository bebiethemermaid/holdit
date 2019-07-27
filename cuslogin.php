<?php
include("server.php");
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="header"><h3>Login</h3></div>
<form method="POST" action="cuslogin.php">
    <?php
    include("errors.php");
  
    ?>
    
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="user_email">
    </div>
    
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="user_password">
    </div>

    <div class="input-group">
      <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>Don't have an account?<a href="registration.php"> Sign up</a></p>

</form>
</body>
</html>