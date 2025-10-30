<!doctype html>
<html lang="en">
  <body>
    <h1>List of ALL my nobels!!!</h1>
	
    <?php
		// Connect to database
		include 'db.php';
		// Run SQL query
		$sql = "SELECT * FROM nobels ORDER BY released_date";
		$results = mysqli_query($mysqli, $sql);
	?>
      
      <form action="search-nobels.php" method="post">
  <input type="text" name="keywords" placeholder="Search">
  <input type="submit" value="Go!">
</form>

    <table>
      <?php while($a_row = mysqli_fetch_assoc($results)):?>
        <tr>
          <td><a href="nobel-details.php?id=<?=$a_row['nobel_id']?>"><?=$a_row['nobel_name']?></a></td>
          <td><?=$a_row['rating']?></td>
         </tr>
            
      <?php endwhile;?>
    </table>
      <a href="add-nobel-form.php" class="btn btn-primary">Add a nobel</a>
  </body>
</html>