<?php
function setComponent() {

	include_once '../config/database.php';
	
	if(isset($_POST["btnSubmit"])) {
	    $title = $_POST["title"];
	    $description = $_POST["description"];
	    $code = $_POST["code"];
	    $date = date('Y-m-d', time());
	    echo $date;

	    $query = "insert into component(title, description, code, date_create) value (?,?,?,?)";
	    $stmt = $link->prepare($query);
	    $stmt->bind_param('ssss', $title, $description, $code, $date);
	    $stmt->execute();
	    header("Location:index.php");
  	}

}

function getComponent() {

	include_once '../config/database.php';
	$sql = "SELECT id, title, description, date_create FROM component";
	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) > 0) {
	 echo '
	  <div class="table-responsive">
	   <table class="table table bordered">
	    <tr>
	     <th>Id</th>
	     <th>Title</th>
	     <th>Description</th>
	     <th>Date</th>
	     <th>Source</th>
	    </tr>
 		';
	    while($row = mysqli_fetch_assoc($result)) {
	       echo '
		   <tr>
		    <td>'.$row["id"].'</td>
		    <td>'.$row["title"].'</td>
		    <td>'.$row["description"].'</td>
		    <td>'.$row["date_create"].'</td>
		    <td><a href="view.php?id='.$row["id"].'" type="button" class="btn btn-dark">View</a></td>
		   </tr>
		  ';
	    }
	} else {
	    echo "0 results";
	}
}

function getCode() {
	include_once 'database.php';
	
	if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql ="select * from component where id=".$_GET["id"];
    $result = mysqli_query($link, $sql) ;
    
      if($row = mysqli_fetch_assoc($result))
        echo '
      <div class="row">
        <div class="col-sm-6">
          <textarea placeholder="Code here" class="form-control" aria-label="With textarea" id="html"  readonly name="code">'.$row["code"].'</textarea>
        </div>
        <div class="col-sm-6">
          '.$row["code"].'
        </div>
      </div>';
	}
} 

function getFilterComponent() {
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
  } 
}
?>