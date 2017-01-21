<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<title>Error: Unauthorised Access..!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class='w3-main w3-card-4 w3-center' style='margin-left:20px;margin-right: 20px;margin-top: 20px;'><br>
			<h1 class='w3-red'>Unauthorised Access..!</h1>
			<h6>Go <a href="<?php 
			if(isset($_SESSION['url'])) 
   				$url = $_SESSION['url']; // holds url for last page visited.
			else 
   				$url = 'index.php';
			echo 'http://' . $_SERVER['HTTP_HOST']. $url?>">Back</a></h6>
			<h6 class='w3-text-teal'>Contact admin: </h6><br>
		</div>
	</body>
	<?php require 'footer.php';?>
</html>