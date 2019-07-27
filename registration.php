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
    <title>Registration</title>
</head>
<body>
    <div class="header"><h3>Member Registration</h3></div>
<form method="POST" action="registration.php">  
    <?php
    include("errors.php");
    ?>
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="user_email" value="<?php echo $user_email; ?>">
    </div>
    
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="user_password">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="user_password2">
    </div>
    <div class="input-group">
        <label>Firstname</label>
        <input type="text" name="user_firstname" value="<?php echo $user_firstname; ?>">
    </div>
    <div class="input-group">
        <label>Lastname</label>
        <input type="text" name="user_lastname">
    </div>
    <div class="input-group">
        <label>Identification Number</label>
        <input type="text" name="user_citizen">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="text" name="user_tel">
    </div>
    
    <div class="input-group">
      <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>Already have an account?<a href="cuslogin.php"> Sign in</a></p>

</form>
</body>
</html>