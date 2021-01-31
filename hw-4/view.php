<!DOCTYPE html>
<html>
<head>
<title>MOVIES</title>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Genre</th>
<th>Screenwriter</th>
<th>Director</th>
<th>Production</th>
<th>Year</th>
<th>Duration</th>


</tr>
<?php
if(isset($_POST['view']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "registration";
    
    // get id to delete
    $id = $_POST['id'];
    
    $conn = mysqli_connect("localhost", "root", "", "registration");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title, genre, screenwriter, director, production, year, duration FROM movie WHERE `id` = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["screenwriter"] . "</td><td>" . $row["director"] . "</td><td>" . $row["production"] . "</td><td>" . $row["year"] . "</td><td>" . $row["duration"]  ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}
?>
</table>
</body>
</html>