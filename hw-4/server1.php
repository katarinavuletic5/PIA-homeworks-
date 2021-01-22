<?php 
session_start(); 

	
$title = "";
$errors = array(); 
$_SESSION['success'] = "";

	
$db = mysqli_connect('localhost', 'root', '', 'registration');





// ADMINISTRATOR
if (isset($_POST['add_movie'])) {
	$title = mysqli_real_escape_string($db, $_POST['title']);
	$genre = mysqli_real_escape_string($db, $_POST['genre']);
	$screenwriter = mysqli_real_escape_string($db, $_POST['screenwriter']);
	$director = mysqli_real_escape_string($db, $_POST['director']);
	$production = mysqli_real_escape_string($db, $_POST['production']);
	$year = mysqli_real_escape_string($db, $_POST['year']);
	$duration = mysqli_real_escape_string($db, $_POST['duration']);
	$actor = mysqli_real_escape_string($db, $_POST['actor']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$img = mysqli_real_escape_string($db, $_POST['img']);

		
	if (empty($title)) {array_push($errors, "Title is required");}
	if (empty($genre)) {array_push($errors, "Genre is required");}
    if (empty($screenwriter)) {array_push($errors, "Screenwriter is required");}
	if (empty($director)) {array_push($errors, "Director is required");}
	if (empty($production)) {array_push($errors, "Production is required");}
	if (empty($year)) {array_push($errors, "Year is required");}
	if (empty($duration)) {array_push($errors, "Duration is required");}
	if (empty($actor)) {array_push($errors, "Actor is required");}
	if (empty($description)) {array_push($errors, "Description is required");}
	if (empty($img)) {	array_push($errors, "Img is required");}
		
		
 
    $movies_check_query = "SELECT * FROM movies WHERE title='$title' LIMIT 1";
    $result = mysqli_query($db, $movies_check_query);
    $movies = mysqli_fetch_assoc($result);
  
  
		
		
    if (count($errors) == 0) {
			$query = "INSERT INTO movies (title, genre, screenwriter, director, production, year, duration, actor, description, img) 
					  VALUES('$title', '$genre', '$screenwriter', '$director', '$production', '$year', '$duration', '$actor', '$description', '$img')"; 
			mysqli_query($db, $query);
			
			$_SESSION['title'] = $title; 
			$_SESSION['success'] = "You added a movie!"; 
			header('location: home1.php'); 	
		
	}



	}



?>