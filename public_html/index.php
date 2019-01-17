<?php
include_once('config.php');
?>
<html>

	<head>
  	<title>Registration</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>

	<div class="container">
  		<h2>Registration Form</h2>
  		<form method="post" action="add.php">
			<div class="form-group">
      			<label for="Name">Name:</label>
      			<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    			</div>    			
			<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    			</div>
    			<div class="form-group">
      			<label for="pwd">Password:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    			</div>
    			<div class="checkbox">
      			<label><input type="checkbox" name="remember"> Remember me</label>
    			</div>
	    		<button type="submit" class="btn btn-default">Submit</button>
  		</form>
	</div>
	
</body>
</html>
