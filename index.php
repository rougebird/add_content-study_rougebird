<?php
session_start();


$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		
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
	
		<?php

			error_reporting(E_ALL & ~E_NOTICE);

			$servername = "localhost:3306";
			$username = "rb_addC_user";
			$password = "1RkTxN);~U=6";

			//Connecting to DB
			$conn = mysqli_connect($servername,$username,$password,"study_content");

			if (!$conn) {
    			die("Connection failed: " . mysqli_connect_error());
			}
		?>
	</head>
	<body >
	
		<?php require 'menu.php';?>	
		<div class="w3-main w3-card-2 w3-round" style="margin-left:20px;margin-right: 20px;">
		<header class="w3-container" style="margin-left: 5px">
    		<h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
  		</header>
  		<div class="w3-row-padding w3-margin-bottom">
    		<div class="w3-quarter">
      			<div class="w3-container w3-pink w3-padding-16">
        			<div class="w3-left"><i class="fa fa-tags w3-xxxlarge"></i></div>
        			<div class="w3-right">
          				<h3>
          					<?php
          						//For nummber of categories
          						$sql_cat="SELECT * FROM content_category";
          						$result_cat=mysqli_query($conn,$sql_cat);
          						$n_cat=mysqli_num_rows($result_cat);
          						echo $n_cat;
          					?>
          				</h3>
        			</div>
        			<div class="w3-clear"></div>
        			<h4>Categories</h4>
      			</div>
    		</div>
    		
    		<div class="w3-quarter">
      			<div class="w3-container w3-blue-grey w3-padding-16">
        			<div class="w3-left"><i class="fa fa-upload w3-xxxlarge"></i></div>
        			<div class="w3-right">
          				<h3>
          					<?php
          						//For total number of uploads
          					?>
          				</h3>
        			</div>
        			<div class="w3-clear"></div>
        			<h4>Number of files uploaded</h4>
      			</div>
    		</div>
    		<div class="w3-rest">
    			<h5>Recent Uploads</h5>
        			<table class="w3-table w3-striped w3-white">
          			</table>
          	</div>
    	</div><br>

  		</div><br>
	</body>
	<?php require 'footer.php';?>
</html>