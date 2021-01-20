<?php 
	session_start(); //starting the session, to use and store data in session variable

	//if the session variable is empty, this means the user is yet to login
	//user will be sent to 'login.php' page to allow the user to login
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: login.php');
	}

	// logout button will destroy the session, and will unset the session variables
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="imdb.css">
</head>
<body>
<div class="container">
		<!-- creating notification when the user logs in -->
		<!-- accessible only to the users that have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
			</div>
		<?php endif ?>
      
		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<br>
			<a href="login.php">Logout</a>
		<?php endif ?>
		
</div>
		
</body>
</html>