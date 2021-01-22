<?php include('server.php') ?> 
<!DOCTYPE HTML>
<html> 
<head>
  <link rel="stylesheet" href="imdb.css">
  <title>Regular</title>
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
 <form>
  <label for="cars">Film rating:</label>
  <select>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
	<option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
  <br><br>
  <input type="submit">
 </form>
</div>


</body>
</html>