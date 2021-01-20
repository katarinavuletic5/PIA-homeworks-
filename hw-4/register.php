<?php include('server.php') ?>
<!DOCTYPE HTML>  
<html>
<head> 
  <link rel="stylesheet" href="imdb.css">
  <title>REGISTER</title>
</head>
<body>  
<div class="container">
<h2>REGISTER</h2>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <?php include('errors.php'); ?> 
  <input type="text" name="name" placeholder="Name">
  <br><br>
  <input type="text" name="surname"  placeholder="Surname">
  <br><br>
  <input type="text" name="username" placeholder="Username">
  <br><br>
  <input type="text" name="email"  placeholder="E-mail">
  <br><br>
  <input type="password" name="password"  placeholder="Password">
  <br><br>
  <button type="submit" class="btn" name="reg_user">Register</button>
  <br><br>
  <a href="login.php">Login</a>
 </form>
</div>
</body>
</html>
