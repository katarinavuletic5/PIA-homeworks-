<?php 
	session_start(); 
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
			<a href="administrator.php">Add a new movie</a>
		<?php endif ?>
		
</div>
		
</body>
</html>
