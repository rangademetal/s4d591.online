<!DOCTYPE html>
<html lang="en">
<head>
  <title>View</title>
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
        <button onclick="darkModeToggle()" type="button" class="btn btn-dark">Dark Mode</button>
    </ul>
</nav>
 <br/><br/>
 
<?php 
  include_once 'config/models.php';
  getCode();
?>

<script>
    function darkModeToggle() {
        var element = document.body;
        element.classList.toggle("dark-mode",);
    }

</script>
</body>
</html>