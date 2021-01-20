<?php include('server.php') ?> 
<!DOCTYPE HTML>
<html> 
<head>
  <link rel="stylesheet" href="imdb.css">
  <title>LOGIN</title>
</head> 
<body>
<div class="container">
<h2>LOGIN</h2>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <?php include('errors.php'); ?> 
  <input type="text" name="username"  placeholder="Username or E-mail">
  <br><br>
  <input type="password" name="password"  placeholder="Password">
  <br><br>
  <button type="submit" class="btn" name="login_user"> Login </button> 
  <br><br>            
  <a href="register.php">Regsiter</a> 
 </form>
</div>
</body>
</html>