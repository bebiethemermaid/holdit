<?php 
  session_start(); 

  if (!isset($_SESSION['user_email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: cuslogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user_email']);
  	header("location: cuslogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['user_email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['user_email']; ?></strong></p>
    	<p> <a href="requestevent.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>