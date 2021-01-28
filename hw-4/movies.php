<!DOCTYPE html>
<html>
<head>
<title>MOVIES</title>
<link rel="stylesheet" href="imdb.css">
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Genre</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "registration");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title, genre FROM movie";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>"
. $row["genre"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>