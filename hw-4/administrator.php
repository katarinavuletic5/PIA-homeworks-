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
  <input name="title" type="text" placeholder="Title">
  <br><br>
  <input name="genre" type="text" placeholder="Genre" >
  <br><br>
  <input name="screenwriter" type="text" placeholder="Screenwriter" >
  <br><br>
  <input name="director" type="text" placeholder="Director" >
  <br><br>
  <input name="production" type="text" placeholder="Production house" >
  <br><br>
  <input name="year" type="text" placeholder="Year of issue" >
  <br><br>
  <input name="duration" type="text" placeholder="Duration in minutes" >
  <br><br>
  <input  name="actor" type="text" placeholder="List of actors" >
  <br><br>
  <textarea name="description" rows="5" cols="40" placeholder="A shorter description"></textarea>
  <br><br>
  <input name="img" type="file" accept="image/*">
  <br><br><br><br>
  <button type="submit" class="btn" name="add_movie">Add a movie</button> 
  <br><br>            
 </form>
</div>


</body>
</html>