<?php include('server.php') ?>
<!DOCTYPE HTML>  
<html>
<head> 
  <title>REGISTER</title>
  <link rel="stylesheet" href="imdb.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.search-box {
        width:300px;
        position:relative;
        display:inline-block;
        font-size:14px;
}
.search-box input[type="text"] {
        height:32px;
        padding:5px 10px;
        border:1px solid #CCCCCC;
        font-size:14px;
}
.result {
        position:absolute;        
        z-index:999;
        top:100%;
        left:0;
}
.search-box input[type="text"], .result {
        width:100%;
        box-sizing:border-box;
}
 
.result p {
        margin:0;
        padding:7px 10px;
        border:1px solid #CCCCCC;
        border-top:none;
        cursor:pointer;
}
.result p:hover {
        background:#f2f2f2;
}
</style>
 
  <script type="text/javascript">
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
             var inputVal = $(this).val();
             var resultDropdown = $(this).siblings(".result");
             if(inputVal.length){
                $.get("search.php", {term: inputVal}).done(function(data){
                    resultDropdown.html(data);
                 });
              } else{
                 resultDropdown.empty();
            }
        });
    
    
         $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
         });
    });
   </script>
  
</head>
<body>  
<div>
<nav class="navbar navbar-inverse">
  <div id="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IMDB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="users.php" >Users</a></li>
      <li><a href="movies.php" >Movies</a></li>
	  
  
    <li>
    <div class="search-box">
	<form class="navbar-form">
        <input type="text" autocomplete="off" placeholder="Search movies..." />
        <div class="result"></div>
    </form>
    </div>
    </li>
    </ul>
  </div>
</nav>
</div>

<div class="container">
<h2>REGISTER</h2>
 <form method="post" action="register.php"> 
  <?php include('errors.php'); ?> 
  <input type="text" name="name" placeholder="Name">
  <br><br>
  <input type="text" name="surname"  placeholder="Surname">
  <br><br>
  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  <br><br>
  <input type="text" name="email"  placeholder="E-mail" value="<?php echo $email; ?>">
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

