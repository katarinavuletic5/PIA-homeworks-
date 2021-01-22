<?php 
	session_start(); 


	if (!isset($_SESSION['title'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: administrator.php');
	}

	
	
	if (isset($_GET['delete'])) {
		session_destroy();
		unset($_SESSION['title']);
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

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
			</div>
		<?php endif ?>
      

		<?php  if (isset($_SESSION['title'])) : ?>
			<p>You added a movie  <strong><?php echo $_SESSION['title']; ?></strong></p>
			<a href="administrator.php">Delete</a>
		<?php endif ?>
		
</div>
		
</body>
</html>