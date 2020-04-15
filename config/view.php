<?php 
  include_once "models.php";


  if(isset($_POST["query"])) {
    include_once "database.php";
    $search = mysqli_real_escape_string($link, $_POST["query"]);
    $query = "SELECT * FROM component WHERE description LIKE '".$search."%'";
    $result = mysqli_query($link, $query) or die($link);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
         echo ' 
        <div class="table-responsive">
         <table class="table table bordered">
          <tr>
          <td>'.$row["id"].'</td>
          <td>'.$row["title"].'</td>
          <td>'.$row["description"].'</td>
          <td>'.$row["date_create"].'</td>
          <td><a href="view.php?id='.$row["id"].'" type="button" class="btn btn-dark">View</a></td>
          </tr>
         </table>
        </div>
      ';
      }
    }
  } else 
   getComponent();
?>