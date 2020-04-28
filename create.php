<?php 
  include_once 'config/models.php';
  setComponent();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <a class="nav-link" href="index.php">Homepage</a>
        <a class="nav-link" href="create.php">Create</a>
    </ul>
</nav>
 <br/><br/>
 
 <div class="row">
  <div class="col-sm-6">
         
    <form action="create.php" method="POST">
      <div class="form-row">
        <div class="col-7">
          <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="col-7">
          <input type="text" class="form-control" placeholder="descripton" name="description">
        </div>
        <textarea placeholder="Code here" class="form-control" aria-label="With textarea" id="html" onkeyup="refresh()" name="code"></textarea>
        <input type="submit" type="button" class="btn btn-secondary btn-lg btn-block bg-dark" value="Create" name="btnSubmit"/>
      </div>
    </form>

  </div>
  
  <div class="col-sm-6">      
   <div class="embed-responsive embed-responsive-16by9">
    <iframe id="viewer" class="embed-responsive-item" allowfullscreen></iframe>
  </div>
 </div>

</div> 
<br/><br/>
  <script type="text/javascript">
      function refresh() {
        var textContentHTML = document.getElementById("html").value;
        document.getElementById("viewer").srcdoc = textContentHTML;
      }
  </script>
</body>
</html>