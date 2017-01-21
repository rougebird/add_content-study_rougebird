<?php
session_start();
if(!isset($_SESSION["logged"]) )
{
	$url="Error.php";
	header("Location: http://" . $_SERVER['HTTP_HOST']. $url);
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<title>New Content Category</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			.shadowNfont
			{
				text-shadow: 0 1px 3px rgba(0,0,0, .5);
				font-family:"courier new";
				font-size:40px;
				font-weight:bold;				
			}
		</style>
	</head>
	<body>
	<?php require 'menu.php';?>	
	<div class='w3-main w3-card-4' style='margin-left:20px;margin-right: 20px;'><br/>
	<form class="w3-container w3-card-2" action="<?php echo htmlspecialchars('addNewCat.php'); ?>" method="post" style='margin-left:20px;margin-right: 20px; '>
		
		<h3>New Category</h3>

		<label class="w3-label">Category Name:</label>
		<input class="w3-input w3-border w3-animate-input w3-small" type="Text" name="cat_title" style="width: 30%" required>
		<br/>

		<label class="w3-label">Category Description:</label>
		<textarea class="w3-input w3-border w3-animate-input w3-small" type="Text" name="cat_desc" style="width: 30%" required></textarea> 
		<br/>

		<label calss="w3-label">Category Type:</label>
		<select class="w3-input w3-select w3-border" name="cat_type" style="width: 30%" required>
			<option value=""></option>
			<option value="CODE">Code Snipets hosted on Gist</option>
			<option value="DOCS">Uploaded Document links</option>
		</select>
		<br/>

		<input class="w3-btn w3-blue" type="submit"><br><br>

	</form>
	<br/>
	</div>
	</body>
	
	</html>
	