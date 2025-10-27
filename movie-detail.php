!doctype html>
<html lang="en">
<body>
<h1>List of my movie</h1>
<?php
// Connect to database
include("db.php");
// Run SQL query
$sql = "SELECT * FROM movie ORDER BY Movie_id";
$results = mysqli_query($mysqli, $sql);
?>
<form action="search-movie.php" method="post">
<input type="text" name="keywords" placeholder="Search">
<input type="submit" value="Go!">
</form>
<table>

<?php while($a_row = mysqli_fetch_assoc($results)):?>
<
<?php endwhile;?>
</table>

</body>
</html>
