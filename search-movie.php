<h1>Search results</h1>
<?php

  // Connect to database and run SQL query
  include("db.php");

  // Read value from form
  $keywords = $_POST['keywords'];  

  // Run SQL query
  $sql = "SELECT * FROM movie
          WHERE movie_name LIKE '%{$keywords}%'
          ORDER BY released_date";
         
  $results = mysqli_query($mysqli, $sql);
?>

<table>
  <?php while($a_row = mysqli_fetch_assoc($results)):?>
    <tr>
      <td><a href="movie.php?id=<?=$a_row['movie_id']?>"><?=$a_row['movie_name']?></a></td>
      <td><?=$a_row['price']?></td>
    </tr>
  <?php endwhile;?>
</table>