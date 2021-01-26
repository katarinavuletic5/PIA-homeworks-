<?php include('server1.php') ?>
<!DOCTYPE HTML>
<html> 
<head>
  <link rel="stylesheet" href="imdb.css">
  <title>Administrator</title>
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
      
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<br><br><br><br>
			<a href="login.php">Logout</a>
		<?php endif ?>
		
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<h2>Add a movie</h2>
 <form method="post" action="administrator.php">
  <?php include('errors.php'); ?> 
  <input type="text" name="title"  placeholder="Title" value="<?php echo $title; ?>">
  <br><br>
  <input type="text" name="genre" placeholder="Genre" value="<?php echo $genre; ?>">
  <br><br>
  <input type="text" name="screenwriter" placeholder="Screenwriter" >
  <br><br>
  <input type="text" name="director" placeholder="Director" >
  <br><br>
  <input type="text" name="production" placeholder="Production house" >
  <br><br>
  <input type="text" name="year" placeholder="Year of issue" >
  <br><br>
  <input type="text" name="duration" placeholder="Duration in minutes" >
  <br><br>
  <input type="text" name="actor" placeholder="List of actors" >
  <br><br>
  <textarea type="text" name="description" rows="5" cols="40" placeholder="A shorter description"></textarea>
  <br><br>
  <input type="file" name="img" accept="image/*">
  <br><br><br><br>
  <button type="submit" class="btn" name="add_movie">Add a movie</button> 
  <br><br>            
 </form>
</div>


</body>
</html>
